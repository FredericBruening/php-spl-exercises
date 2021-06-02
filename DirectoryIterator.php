<?php

/* DirectoryIterator
 *
 * includes dot files
 * numbered keys
 * path not included in value
 * no config options
 * array requires cloned objects
 */

echo "---DirectoryIterator---" . PHP_EOL;
$dir = new DirectoryIterator('./common/images');
$files = [];

foreach ($dir as $file) {
    if ($file->isFile()) {
        // clone is necessary to add the object to the array
        $files[] = clone $file;
        echo $file->getPathname() . PHP_EOL;
    }
}

echo $files[0]->getFilename() . PHP_EOL;
