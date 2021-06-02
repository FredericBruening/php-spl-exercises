<?php

/* MinHeap
 *
 */

echo "--- MinHeap ---" . PHP_EOL;
$animals = array('horse', 'aardvark', 'monkey', 'zebra',
    'giraffe', 'dog', 'cat');

$min = new SplMinHeap();
$max = new SplMaxHeap();

foreach ($animals as $animal) {
    $min->insert($animal);
    $max->insert($animal);
}

// traversing the heap destroys it
foreach ($min as $item) {
    echo $item . PHP_EOL;
}
echo PHP_EOL;

foreach ($max as $item) {
    echo $item . PHP_EOL;
}


print_r($min);
print_r($max);

