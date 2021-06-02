<?php

/* Stack
 *
 * First in, Last out
 */

echo "--- Stack ---" . PHP_EOL;

$stack = new SplStack();

// add items to the list
$stack[] = 'John';
$stack->push('Jason');
$stack->push('Alice');
$stack->push('Gray');
$stack->push('Yellow');

echo "The top item of the stack is: " . $stack->top() . PHP_EOL;
echo "The item at the bottom of the stack is: " . $stack->bottom() . PHP_EOL;

// remove the item at the bottom
$stack->shift();
echo "The item at the bottom of the stack is: " . $stack->bottom() . PHP_EOL;

// remove the item at the top
$stack->pop();
echo "The top item of the stack is: " . $stack->top() . PHP_EOL;

// remove the item at the middle of the stack
$stack->offsetUnset(floor($stack->count() / 2));

echo $stack->pop() . PHP_EOL;

print_r($stack);