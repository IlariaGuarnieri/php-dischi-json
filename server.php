<?php

$stringDisk = file_get_contents('dischi.json');

$dischi =json_decode($stringDisk);

header('Content-Type: application/json');

echo json_encode($dischi);

?>