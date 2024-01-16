<?php
$diskArray = file_get_contents('./json/diskArray.json');
header('Content-Type: application/json');
echo $diskArray;
