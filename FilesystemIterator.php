<?php

/* FilesystemIterator EXTENDS DirectoryIterator
 *
 * Dot files are skipped
 * Pathname used for key by default
 * Path included in value
 * Configurable
 * Cloning not necessary
*/

echo "---FilesystemIterator---" . PHP_EOL;
// the flag will make the code more portable for non unix OS
$dir = new FilesystemIterator('./common/images', FilesystemIterator::UNIX_PATHS);
// another way to set flags
$dir->setFlags(FilesystemIterator::UNIX_PATHS | FilesystemIterator::KEY_AS_FILENAME);
$files = [];

foreach ($dir as $key => $file) {
    if ($file->isFile()) {
        // clone is NOT necessary to add the object to the array
        $files[] = $file;
        echo $key . " >> " . $file . PHP_EOL;
    }
}

echo $files[0]->getFilename();
