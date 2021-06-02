<?php

/* Queue
 *
 * First in, First out
 */

echo "--- Queue ---" . PHP_EOL;

$queue = new SplQueue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->push('D');
$queue[] = 'E';

echo $queue->dequeue() . PHP_EOL;
echo $queue->dequeue() . PHP_EOL;
echo $queue->dequeue() . PHP_EOL;
echo $queue->dequeue() . PHP_EOL;
echo $queue->dequeue() . PHP_EOL;


