<?php

/* SplFileObject
 *
 */

echo "--- FileObject EXTENDS FileInfo ---" . PHP_EOL;

$csvFile = new SplFileObject('./common/data/cars_tab.csv');

// set type of file
$csvFile->setFlags(SplFileObject::READ_CSV);

// set delimiter
$csvFile->setCsvControl("\t");

foreach ($csvFile as $line) {
    print_r($line);
}

