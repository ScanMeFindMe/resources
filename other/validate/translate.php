<?php

$APIKEY = '';
include __DIR__."/config.php";
include __DIR__."/helper.php";
include __DIR__."/translate_helper.php";

//var_dump(translate(['first' => 'hello', 'second' => 'goodbye'], 'ru'));

if (count($argv) < 2) {
    echo "Usage: php ".basename(__FILE__)." LANG\n";
    exit(1);
}

$maindir = dirname(dirname(__DIR__));
[$script, $language] = array_merge($argv, [null, null, null, null]);

$enfile = "texts/en/translations.json";
$langfile = "texts/{$language}/translations.json";

if (!file_exists($maindir."/".$langfile)) {
    throw new Exception("File $langfile does not exist");
}

// Language strings.

$endata = parse_json($maindir."/".$enfile);
$langdata = parse_json($maindir."/".$langfile);

if ($missing = array_diff_key($endata, $langdata)) {
    echo "Missing string:\n - ".join("\n - ", array_keys($missing))."\n\n";
    $translated = translate($missing, $language);
    foreach ($missing as $key => $value) {
        compareplaceholders($langfile, null, null, null, $key, $value, $translated[$key], true);
    }
    $langdata = $langdata + $translated;
    $all = unflatten_json($langdata);
    recur_ksort($all);
    file_put_contents($maindir."/".$langfile,
        preg_replace('/  /', ' ', json_encode($all, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)) . "\n");
}

// Static, dynamic, articles

foreach (['static', 'dynamic', 'articles', 'emails'] as $section) {
    $endata = get_all_strings_in_section('en', $section);
    $langdata = get_all_strings_in_section($language, $section);
    
    // If there is a multiline content somewhere and the number of parts does not match - remove translation
    foreach ($langdata as $filename => $data) {
        foreach ($data as $key => $value) {
            $envalue = $endata[$filename][$key] ?? '';
            if (is_array($value) && is_array($envalue) && count($value) != count($envalue)) {
                unset($langdata[$filename][$key]);
            }
        }
    }
    
    // Find missing sections and translate them
    $endataflattened = flatten_json($endata);
    if ($missing = array_diff_key($endataflattened, flatten_json($langdata))) {
        echo "Missing sections:\n - ".join("\n - ", array_keys($missing))."\n\n";
        $missing = translate($missing, $language);
        foreach ($missing as $key => $value) {
            $missing[$key] = restore_whitespaces($value, $endataflattened[$key]);
        }
        foreach (unflatten_json($missing) as $filename => $data) {
            $data = array_map('combine_multiline', ($langdata[$filename] ?? []) + $data);
            $en = array_map('combine_multiline', $endata[$filename]);
            $newdata = prepare_data($section, $data, $en);
            file_put_contents("$maindir/texts/$language/$section/$filename.md", $newdata);
        }
    }
}


//-----------------------------------------


function path_is_writable($f) {
    global $maindir;
    if (!is_writable($f)) {
        throw new Exception("File ".basename(dirname($f)).'/'.basename($f)." is not writable:\n chmod a+w -R $maindir/texts\n\n");
    }
    return true;
}

function get_all_strings_in_section($lang, $section) {
    global $maindir;
    $dir = "$maindir/texts/$lang/".$section;
    $res = [];
    if ((is_dir($dir) && path_is_writable($dir)) || (!file_exists($dir) && path_is_writable(dirname($dir)))) {
        foreach (scandir($dir) as $file) {
            $f = "$dir/$file";
            if (preg_match('/^(.+)\.md$/', $file, $fname) && path_is_writable($f)) {
                [$data, $offsets] = parse_file($section, $f);
                $res[$fname[1]] = array_map('split_if_multiline', $data);
            }
        }
    }
    return $res;
}

function split_if_multiline(string $text) {
    $text = trim($text);
    $parts = preg_split('/\\n\\n/', $text);
    if (count($parts) <= 1) return $text;
    return $parts;
}

function combine_multiline($v) {
    return is_array($v) ? join("\n\n", $v) : $v;
}