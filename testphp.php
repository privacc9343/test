<?php
$directory = './'; 
$files = scandir($directory);
$files = array_diff($files, array('.', '..'));
echo json_encode($files); // 
?>
