<?php

//good source: https://www.freeformatter.com/mime-types-list.html


header('Content-Type: application/json');

$object = new stdClass();

$object->id = 4;
$object->name = "Augustus";
$object->info = new stdClass();
$object->info->phone = "5555-5555";
$object->info->addres = "Whatever street";

echo json_encode($object);

header('Content-Type: text/html');

echo "<p>A paragraph</p>";

header('Content-Type: application/x-7z-compressed');

echo "is this a fucking zip file? No";

?>