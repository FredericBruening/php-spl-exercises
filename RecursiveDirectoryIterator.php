<?php

/* RecursiveDirectoryIterator INHERITS FROM FilesystemIterator
 *
 * Since it inherits from the FilesystemIterator, it uses its flags
 */

echo "--- RecursiveDirectoryIterator ---" . PHP_EOL;
// the UNIX_PATHS flag will make the code more portable for non unix OS
$files = new RecursiveDirectoryIterator('./common');
$files->setFlags(FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);

// iterating the iterator recursively
// by default accesses only filenames unless a flag is passed
$files = new RecursiveIteratorIterator($files, RecursiveIteratorIterator::SELF_FIRST);

// if you want to limit the depth of the iterator
$files->setMaxDepth(0);

foreach ($files as $file) {
    echo $file . PHP_EOL;
}

