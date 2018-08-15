<?php

function get_filename($extension=".txt", $remove='') {
    return ltrim($_SERVER['REDIRECT_URL'], $remove).$extension;
}


function load_mock($filename) {
    return file($filename);
}

function process_mock($filename) {
    $lines = load_mock($filename);
    if ($lines) {
        $headers = true;
        foreach($lines as $l) {
            $l = rtrim($l);
            if (strlen($l)==0) {
                $headers = false;
            }
            if ($headers) {
                header($l);
            } else {
                echo "$l\n"; 
            }
        }
    } else {
        header("HTTP/1.1 404 NOT FOUND");
        header("Content-Type: text/plain");
        echo "Mock $filename does not exist.";
	exit(1);
    }
}

$config = parse_ini_file("config.ini");
if (!$config) {
    header("HTTP/1.1 500 NOT FOUND");
    header("Content-Type: text/plain");
    echo "Configuration file config.ini is missing or can not be parsed.";
    exit(1);
}

$filename = get_filename($config["extension"], $config["remove"]);
process_mock($filename);

?>
