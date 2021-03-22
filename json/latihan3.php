<?php
$content=file_get_contents('coba2.json');

$content=utf8_encode($content);

$result=json_decode($content,true);

echo $result[0]["pembimbing"]["pembimbing 1"];
?>