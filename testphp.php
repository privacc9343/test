<?php
$directory = '/';
$files = scandir($directory);
$files = array_diff($files, array('.', '..'));
foreach ($files as $file) {
    echo $file . "<br>";
}

?>	