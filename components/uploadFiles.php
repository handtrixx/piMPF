<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $errors = [];
        $path = '../images/';
        $thumbpath ='../thumbnails/';

        $extensions = ['jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF'];

        $all_files = count($_FILES['files']['tmp_name']);

        for ($i = 0; $i < $all_files; $i++) {  
            $file_name = $_FILES['files']['name'][$i];
            $file_tmp = $_FILES['files']['tmp_name'][$i];
            $file_type = $_FILES['files']['type'][$i];
            $file_size = $_FILES['files']['size'][$i];
            $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

            $file = $path . $file_name;
            $thumbnail = $thumbpath . $file_name;

            if (!in_array($file_ext, $extensions)) {
                $errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
            }

            if ($file_size > 1992294400) {
                $errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
            }

            if (empty($errors)) {
                move_uploaded_file($file_tmp, $file);
                //Generate Thumbnail
                list($width_orig, $height_orig) = getimagesize($file);
                $ratio_orig = $width_orig/$height_orig;
                if ($width/$height > $ratio_orig) {
                $width = $height*$ratio_orig;
                } else {
                $height = $width/$ratio_orig;
                }
                $image_p = imagecreatetruecolor($width, $height);
                $image = imagecreatefromjpeg($file);
                imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                imagejpeg($image_p, $thumbnail, 72);
            }
            
        }
        if ($errors) print_r($errors);
    }
}
?>