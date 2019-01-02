<?php
$filename = ""; 
$filename = isset($_GET['filename']) ? $_GET['filename'] : '';
$filename = !empty($_GET['filename']) ? $_GET['filename'] : '';

$thumbname = "../thumbnails".substr($filename,6);
$filename = "../".$filename;

// Set a maximum height and width
$width = 500;
$height = 500;
if(!file_exists($thumbname)) {
    // if file does not exist, generate one
    list($width_orig, $height_orig) = getimagesize($filename);
    $ratio_orig = $width_orig/$height_orig;
    if ($width/$height > $ratio_orig) {
    $width = $height*$ratio_orig;
    } else {
    $height = $width/$ratio_orig;
    }
    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    imagejpeg($image_p, $thumbname, 72);    
} 
// then always output thumbnail
header('Content-Type: image/jpeg');
$im = imagecreatefromjpeg($thumbname);
imagejpeg($im);
imagedestroy($im);
?>