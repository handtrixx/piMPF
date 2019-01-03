<?php
$ds          = DIRECTORY_SEPARATOR;  //1 
$storeFolder = '../images';   //2
 
if (!empty($_FILES)) {     
    $tempFile = $_FILES['file']['tmp_name'];         //3          
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
    $targetThumbpath = dirname( __FILE__ ) . $ds. $thumbFolder . $ds;     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
    move_uploaded_file($tempFile,$targetFile); //6
    
    $thumbnail= '../thumbnails/'.$_FILES['file']['name'];
    //copy($targetFile, $thumbnail);

    $width = 500;
    $height = 500;
if(!file_exists($thumbnail)) {
    // if file does not exist, generate one
    list($width_orig, $height_orig) = getimagesize($targetFile);
    $ratio_orig = $width_orig/$height_orig;
    if ($width/$height > $ratio_orig) {
    $width = $height*$ratio_orig;
    } else {
    $height = $width/$ratio_orig;
    }
    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($targetFile);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    imagejpeg($image_p, $thumbnail, 72);    
} 
}
?>  