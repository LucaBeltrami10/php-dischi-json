<?php
$albumArray = file_get_contents('./json/albumArray.json');
header('Content-Type: application/json');
echo $albumArray;
