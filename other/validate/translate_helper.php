<?php

function getApiUrl() {
    // Documentation: https://cloud.google.com/translate/docs/reference/rest/v2/translate
    return 'https://translation.googleapis.com/language/translate/v2';
}

function resolve_language($target) {
    // Full list: https://cloud.google.com/translate/docs/languages
    if (in_array(strtolower($target), ['zh', 'cn', 'zh-cn', 'zh_cn'])) return 'zh-CN';
    if (in_array(strtolower($target), ['zh-tw', 'zh_tw'])) return 'zh-TW';
    return strtolower(substr($target, 0, 2));
}

function translate(array $strings, string $target) {
    $target = resolve_language($target);
    $keyschunks = array_chunk(array_keys($strings), 128);
    $valueschunks = array_chunk(array_values($strings), 128);
    $res = [];
    foreach ($keyschunks as $idx => $keys) {
        $values = $valueschunks[$idx];
        $res = $res + array_combine($keys, translate128($values, $target));
    }
    return $res;
}

function translate128($strings, $target) {
    global $APIKEY;
    $ch = curl_init();

    $query = [
        'source' => 'en',
        'target' => $target,
        'q' => array_values($strings),
        // 'format' => 'text', // Default 'html'
    ];

    curl_setopt($ch, CURLOPT_URL, getApiUrl()."?key=".$APIKEY);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $error    = curl_error($ch);
    $errno    = curl_errno($ch);

    curl_close ($ch);

    if ($errno) {
        throw new Exception($errno." : ".$error."\n\n".$response);
    }

    $translations = [];
    $r = json_decode($response, true);
    foreach ($r['data']['translations'] as $t) {
        $translations[] = $t['translatedText'];
    }

    return $translations;
}

function restore_whitespaces(string $text, string $origtext, bool $maincall = true): string {
    if ($maincall) {
        $text = preg_replace('| style=";text-align:right;direction:rtl"|', '', $text);
    }
    $lines = preg_split('/\\n/', $text);
    $origlines = preg_split('/\\n/', $origtext);
    if (count($origlines) > count($lines)) {
        $errors = comparetags("xyz", "section", "sname", "partkey", 1, $origlines[0], $lines[0]);
        if ($errors) {
            $lasttagorig = find_last_tag($origlines[0]);
            $lasttag = find_last_tag($lines[0]);
            $firsttagorig = find_first_tag($origlines[1]);
            if ($lasttagorig && $lasttagorig !== $lasttag && ($pos = strpos($lines[0], $lasttagorig)) !== false) {
                $p1 = substr($lines[0], 0, $pos + strlen($lasttagorig));
            } else if ($firsttagorig && ($pos = strpos($lines[0], $firsttagorig)) !== false) {
                $p1 = substr($lines[0], 0, $pos);
            } else {
                // error
                echo "--- ??? ---\n";
                return $text;
            }
            $p2 = substr($lines[0], strlen($p1));
            $rest = trim($p2."\n".join("\n", array_slice($lines, 1)));
            //echo "--cp6-- ".count($lines).",".count($origlines)."\n";
            if (count($origlines) > 2) {
                $rest = restore_whitespaces($rest, join("\n", array_slice($origlines, 1)), false);
            }
            $text = trim($p1."\n".$rest);
        } else {
            $rest = trim(join("\n", array_slice($lines, 1)));
            $restorig = trim(join("\n", array_slice($origlines, 1)));
            return $lines[0]."\n".restore_whitespaces($rest, $restorig, false);
        }
    }

    $lines = preg_split('/\\n/', $text);
    if ($maincall && count($lines) == count($origlines)) {
        foreach ($origlines as $idx => $origline) {
            preg_match('/^( *)/', $origline, $matches);
            $lines[$idx] = $matches[1] . trim($lines[$idx]);
        }
        $text = join("\n", $lines);
    }
    return $text;
}

function find_last_tag(string $line) {
    if (preg_match('|<[^>]*>?$|', $line, $matches)) return $matches[0];
    if (preg_match('|^[^>]*>$|', $line, $matches)) return $matches[0];
    return null;
}

function find_first_tag(string $line) {
    if (preg_match('|^<[^>]*>|', trim($line), $matches)) return $matches[0];
    return null;
}
