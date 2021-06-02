<?php

class SortCourses extends SplHeap {

    protected function compare($value1, $value2)
    {
        // for xml cast the title as a string
        return $value1->title === $value2->title ? 0 : ($value1->title > $value2->title ? -1 : 1);
    }
}

$data = file_get_contents('./common/data/courses.json');
$data = json_decode($data);

$courses = new SortCourses();

foreach ($data as $item) {
    $courses->insert($item);
}

foreach ($courses as $course) {
    echo $course->title . " with " . $course->author . PHP_EOL;
}