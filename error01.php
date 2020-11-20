<?php
$path = 'we1come.txt';
if (!file_exists($path)) {
    die("文件不存在"); // Show error message and halt the process if the file does not exist.
} else {
    $file = fopen($path, "r");
}
