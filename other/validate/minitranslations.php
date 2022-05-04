<?php

/*
 Usage:

 To generate CSV file with all mini translations:

     php other/validate/minitranslations.php > languagestrings.csv

 To import mini translations (in language 'pt') - copy the whole spreadsheet from Excel/GDrive, run

     php other/validate/minitranslations.php pt

  Paste from clipboard and press Ctrl+D

  To see changes run:

     git diff

 */

require_once(__DIR__.'/helper.php');

$strings = [
    '#https://staging.scanmefindme.com/en/',
    'app.qrgenerator',
    'app.setupstyle',
    'qrstyle.designideas',
    'qrstyle.style',
    'qrstyle.template',
    'qrstyle.logo',
    'qrstyle.colors',
    'app.metadesc',
    'app.metatitle',
    "app.withproversionurl",
    "app.withproversionfile",
    "app.withproversioncontact",

    '#types of static QR codes - [Text on the button] Full header',
    '*static',

    '#https://staging.scanmefindme.com/en/product',
    'app.product.title',
    'app.product.dynamic.title',
    'app.product.static.title',
    'app.product.gotopro',

    '#https://staging.scanmefindme.com/en/pricing',
    'app.pricing.pricing',
    'plan.free',
    'plan.basic',
    'plan.advanced',
    'plan.expert',
    'plan.trial',
    'app.pricing.pmonth',
    'app.pricing.billedannually',
    'app.pricing.starttrial',

    '#https://staging.scanmefindme.com/en/resources',
    'app.resources.title',
    '*articles',

    '#https://staging.scanmefindme.com/en/contactus',
    'app.contact.contactus',

    '#buttons',
    'app.proaccount',
    'app.download.downloadqr',
    'app.seeexample',
    'app.startfreetrial',
    'pro.dashboard.dashboard',
    'app.readmore',
    'app.cancel',
    'app.close',

    '#E-mails',
    '*emails',
];

$maindir = dirname(dirname(__DIR__));

if (count($argv) > 1) {
    $lang = $argv[1];
    echo "reading lang $lang:\n";
    $lines = [];
    while($f = fgets(STDIN)){
        $line = str_getcsv($f, "\t");
        if (!empty($line[1]) && !empty($line[3])) $lines[] = [$line[1], $line[3]];
    }
    foreach ($lines as $line) {
        update_lang_file($lang, $line[0], $line[1]);
    }

    exit;
}



$data = [];

$endata = parse_json("$maindir/texts/en/translations.json");
$langs = [];
foreach (scandir("$maindir/texts") as $filename) {
    if ($filename !== 'en' && preg_match('/^[\w-]{2,5}$/', $filename)) {
        $langs[] = $filename;
    }
}

$emails = ['en' => get_all_email_texts('en')];
foreach ($langs as $lang) {
    $emails[$lang] = get_all_email_texts($lang);
    $ldata = parse_json("$maindir/texts/$lang/translations.json");
    $data[] = ["",""];
    $data[] = ["",""];
    $data[] = [$lang,""];
    foreach ($strings as $key) {
        //if (!array_key_exists($key, $endata)) echo $key."\n";
        if (substr($key, 0, 1) === '#') {
            $data[] = ["",""];
            $data[] = [preg_replace('|/en/|', "/$lang/", substr($key, 1))];
        } else if ($key === '*emails') {
            foreach ($emails['en'] as $key => $value) {
                $data[] = ["", $key, $value, $emails[$lang][$key] ?? ''];
            }
        } else if (substr($key, 0, 1) === '*') {
            $section = substr($key, 1);
            $l = get_all_headers_in_section($section, $lang);
            foreach (get_all_headers_in_section($section, 'en') as $key => $title) {
                $data[] = ["", $key, $title, $l[$key] ?? ''];
            }
        } else if (!array_key_exists($key, $endata)) {
            echo "\nERROR! key $key not found\n";
            exit(1);
        } else {
            $data[] = ["", "string.".$key, $endata[$key], $ldata[$key] ?? ''];
        }
    }

}

$out = fopen('php://output', 'w');
foreach ($data as $row)  fputcsv($out, $row);
fclose($out);

function get_all_headers_in_section($section, $lang) {
    global $maindir;

    $rv = [];
    if ($lang === "en") {
        $meta = json_decode(file_get_contents("$maindir/texts/{$lang}/{$section}/metadata.json"), true);
        foreach ($meta as $filename) {
            $rv[$section.".".pathinfo($filename, PATHINFO_FILENAME)] = "";
        }
    }

    foreach (scandir("$maindir/texts/{$lang}/{$section}") as $filename) {
        if (preg_match('/^(.+)\.md$/', $filename)) {
            $contents = file_get_contents("$maindir/texts/{$lang}/{$section}/".$filename);
            $lines = preg_split('/\\r?\\n/', $contents);
            $title = preg_replace('!(^<h1>|</h1>$)!', '', trim($lines[0]));
            $rv[$section.".".pathinfo($filename, PATHINFO_FILENAME)] = $title;
        }
    }
    return $rv;
}

function update_lang_file($lang, $key, $value) {
    global $maindir;
    $parts = explode(".", $key);
    $section = array_shift($parts);
    if ($section === 'string') {
        $f = parse_json("$maindir/texts/{$lang}/translations.json");
        $f[join(".", $parts)] = $value;
        dump_json("$maindir/texts/{$lang}/translations.json", $f);
    } else if (in_array($section, ['static', 'articles', 'dynamic'])) {
        $filename = "$maindir/texts/{$lang}/{$section}/{$parts[0]}.md";
        $contents = file_get_contents($filename);
        $lines = preg_split('/\\r?\\n/', $contents);
        $lines[0] = "<h1>$value</h1>";
        file_put_contents($filename, join("\n", $lines));
    } else if ($section === 'emails') {
        $emails = get_all_email_texts($lang, true);
        $emails[$key] = $value;
        put_all_email_texts($lang, $emails);
    } else {
        echo "\nERROR key $key is not recognised\n";
        exit(1);
    }
}

function get_all_email_texts($lang, $withextra = false) {
    global $maindir;
    $section = 'emails';
    $rv = [$section.".general.hello" => '']; // (greetings only once and always first)
    foreach (scandir("$maindir/texts/{$lang}/{$section}") as $filename) {
        if (preg_match('/^(.+)\.md$/', $filename)) {
            $key = pathinfo($filename, PATHINFO_FILENAME);
            $contents = file_get_contents("$maindir/texts/{$lang}/{$section}/".$filename);
            $lines = preg_split('/\\r?\\n/', $contents);
            $rv[$section.".".$key.".subject"] = $lines[0];
            $rv[$section.".general.hello"] = preg_replace('!(^<h1>|</h1>$)!', '', trim($lines[2]));
            $rv[$section.".".$key.".subtitle"] = preg_replace('!(^<h2>|</h2>$)!', '', trim($lines[3]));
            $rv[$section.".".$key.".body"] = preg_replace('!(^<p>|</p>$)!', '', trim($lines[4]));
            if ($withextra && count($lines) > 5) {
                $rv[$section.".".$key.".extra"] = "\n".join("\n", array_slice($lines, 5));
            }
            // TODO what if email has more lines
        }
    }
    return $rv;
}

function put_all_email_texts($lang, $data) {
    global $maindir;
    $section = 'emails';
    foreach (scandir("$maindir/texts/{$lang}/{$section}") as $filename) {
        if (preg_match('/^(.+)\.md$/', $filename)) {
            $key = pathinfo($filename, PATHINFO_FILENAME);
            file_put_contents("$maindir/texts/{$lang}/{$section}/".$filename,
                $data[$section.".".$key.".subject"]."\n"."\n".
                "<h1>".$data[$section.".general.hello"]."</h1>\n".
                "<h2>".$data[$section.".".$key.".subtitle"]."</h2>\n".
                "<p>".$data[$section.".".$key.".body"]."</p>".
                ($data[$section.".".$key.".extra"] ?? '')
            );
            // TODO what if email has more lines
        }
    }
}