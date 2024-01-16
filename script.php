<?php


$apiDiProva = ['mario', 'pino', 'gino', 'precipite', 'volissime', 'volmente'];
header('content-type: application/json');
file_put_contents('./json/apiDiProva.json', json_encode($apiDiProva));
