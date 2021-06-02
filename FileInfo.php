<?php

/* FileInfo
 *
 */

echo "--- FileInfo ---" . PHP_EOL;
// the UNIX_PATHS flag will make the code more portable for non unix OS
$files = new FilesystemIterator('./common/images', FilesystemIterator::UNIX_PATHS);

foreach ($files as $file) {
    // $file is an instance of FileInfo Class
    if($file->getExtension() === 'jpg') {
        echo 'JPG: ' . $file->getRealPath() . ' and ';
    }

    echo $file->getFilename() . ' is ' . $file->getSize() . ' bytes.' . PHP_EOL;
}

