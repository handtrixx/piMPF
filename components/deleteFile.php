<?php
$file = ""; 
$file = isset($_POST['filename']) ? $_POST['filename'] : '';
$file = !empty($_POST['filename']) ? $_POST['filename'] : '';
$message = "";
$files = explode(",", $file);

foreach ($files as &$value) {
    $thumbfile = "../thumbnails".substr($value,6);
    $datafile = "../".$value;
    
    if (file_exists($datafile)) {
        unlink($datafile);
        $message = "true";
        if (file_exists($thumbfile)) {
            unlink($thumbfile);
        }
    }
    else {
        $message = "false";
    }
}
echo $message;
unset($value); 
unset($datafile); 
unset($thumbfile); 
?>
