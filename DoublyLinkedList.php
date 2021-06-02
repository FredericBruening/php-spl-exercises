<?php

/* DoublyLinkList
 *
 */

echo "--- DoublyLinkedList ---" . PHP_EOL;

$list = new SplDoublyLinkedList();

// add items to the list
$list[] = 'John';
$list->push('Jason');
$list->push('Alice');
$list->push('Gray');
$list->push('Yellow');

echo "The top item of the list is: " . $list->top() . PHP_EOL;
echo "The item at the bottom of the list is: " . $list->bottom() . PHP_EOL;

// remove the item at the bottom
$list->shift();

// remove the item at the top
$list->pop();

// remove the item at the middle of the list
$list->offsetUnset(floor($list->count() / 2));

print_r($list);


// another use case for the doubly linked list
$data = simplexml_load_file('./common/data/courses.xml');
$courses = new SplDoublyLinkedList();

function getLastName($author) {
    $pos = strpos($author, ' ');
    return substr($author, $pos + 1);
}

foreach ($data as $item) {
   if ($courses->isEmpty()) {
       $courses->push($item);
   } else {
       $last_name = getLastName($item->author);
       $courses->rewind();

       while ($courses->valid() && getLastName($courses->current()->author) <= $last_name) {
           $courses->next();
       }

       $courses->add($courses->key(), $item);
   }
}

foreach ($courses as $course) {
    echo $course->author . " -- " . $course->title . PHP_EOL;
}

// reverse order
echo PHP_EOL . '--- Reversed Order ---' . PHP_EOL;
$courses->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO | SplDoublyLinkedList::IT_MODE_DELETE);

foreach ($courses as $course) {
    echo getLastName($course->author) . " -- " . $course->title . PHP_EOL;
}