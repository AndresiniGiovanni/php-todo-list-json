<?php
//leggo il file 
$todol = file_get_contents('data.json');

$todol = json_decode($todol, true);

header('Content-Type: application/json');
echo json_encode($todol, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);


?>