<?php
$file = ""; 
$file = isset($_POST['filename']) ? $_POST['filename'] : '';
$file = !empty($_POST['filename']) ? $_POST['filename'] : '';
$message = "";
$files = explode(",", $file);

foreach ($files as &$value) {
    
    if (file_exists($value)) {
        unlink($value);
        $message = "true";
    }
    else {
        $message = "false";
    }
}



echo $message;
unset($value); 
?>
