<?php
$ds          = DIRECTORY_SEPARATOR;
$storeFolder = '../images';
$thubmnailFolder = '../thumbnails';
$targetWidth = 1920;
$targetHeight = 1080;
$thumbWidth = 500;
$thubmHeight = 500;

if (!empty($_FILES)) {     
    $tempFile = $_FILES['file']['tmp_name'];  
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds; 
    $targetThumbpath = dirname( __FILE__ ) . $ds. $thumbnailFolder . $ds;     
    
    $targetFile =  $targetPath. $_FILES['file']['name']; 
    $targetThumbnail= $targetThumbpath. $_FILES['file']['name'];
    
    $exif = exif_read_data($tempFile);
    $orientation = $exif['Orientation'];
    if($orientation != 1){
        $img = imagecreatefromjpeg($tempFile);
        $deg = 0;
        switch ($orientation) {
          case 3:
            $deg = 180;
            break;
          case 6:
            $deg = 270;
            break;
          case 8:
            $deg = 90;
            break;
        }
        if ($deg) {
          $img = imagerotate($img, $deg, 0);        
        }
        imagejpeg($img, $tempFile, 95);
    }
    
    move_uploaded_file($tempFile,$targetFile);
    copy($targetFile, $targetThumbnail);
    
    
    list($width_orig, $height_orig) = getimagesize($targetFile);
    $ratio_orig = $width_orig/$height_orig;
    
    
    if ($targetWidth/$targetHeight > $ratio_orig) {
        $targetWidth = $targetHeight*$ratio_orig;
    } else {
        $targetHeight = $targetWidth/$ratio_orig;
    }
    
    if ($thumbWidth/$thumbHeight > $ratio_orig) {
        $thumbWidth = $thumbHeight*$ratio_orig;
    } else {
        $thumbHeight = $thumbWidth/$ratio_orig;
    }
    
    $image_p = imagecreatetruecolor($targetWidth, $targetHeight);
    $image = imagecreatefromjpeg($targetFile);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $targetWidth, $targetHeight, $width_orig, $height_orig);
    imagejpeg($image_p, $targetFile, 72);  
    
    
    $image_p = imagecreatetruecolor($thumbWidth, $thumbHeight);
    $image = imagecreatefromjpeg($targetFile);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width_orig, $height_orig);
    imagejpeg($image_p, $targetThumbnail, 72);
}
?>  