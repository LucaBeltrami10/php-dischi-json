<?php

$apiData = file_get_contents('.json/diskArray.json');
header('content-type : application/json');
echo $apiData;
