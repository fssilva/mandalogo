<?php

$directory = './';

// the name of your zip archive to be created
$zipfile = 'backup.zip';



// DO NOT TOUCH BELOW IF YOU DONT KNOW WHAT IT IS
// all the process below

$filenames = array();

// function that browse the directory and all subdirectories inside

function browse($dir) {
global $filenames;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != ".." && is_file($dir.'/'.$file)) {
                $filenames[] = $dir.'/'.$file;
            }
            else if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                browse($dir.'/'.$file);
            }
        }
        closedir($handle);
    }
    return $filenames;
}

browse($directory);

// creating zip archive, adding browsed files

$zip = new ZipArchive();

if ($zip->open($zipfile, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$zipfile>\n");
}

foreach ($filenames as $filename) {
    echo "Adding " . $filename . "<br/>";
    $zip->addFile($filename,$filename);
}

echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();

?>