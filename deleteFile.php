<?php
$file = ""; 
$file = isset($_POST['filename']) ? $_POST['filename'] : '';
$file = !empty($_POST['filename']) ? $_POST['filename'] : '';
$message = "";

if (file_exists($file)) {
    unlink($file);
    $message = "true";
}
else {
    $message = "false";
}
echo $message;
?>
