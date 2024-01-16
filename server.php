<?php
$diskArray = file_get_contents('./json/diskArray.json');
header('Content-Type: application/json');
echo $diskArray;

/* $apiData = file_get_contents('.json/diskArray.json');
header('content-type : application/json');
echo $apiData; */