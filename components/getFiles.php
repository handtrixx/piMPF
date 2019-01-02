<?php
$files = array();
foreach (glob("../images/*.{jpg,JPG,jpeg,JPEG,gif,GIF,png,PNG}", GLOB_BRACE) as $file) {
  $files[] = $file;
}
$string ="";
$string =
'
{
  "data": 
  [';

foreach ($files as $file) {   
    $chdate = gmdate("Y-m-d H:i:s", filemtime($file));    
    $size = bcdiv(filesize($file), '1048576', 2);    
    $string=$string. ' 
        ["'.substr($file,3).'",
        "'.substr($file,3).'",
        "'.$size.' MB ",
        "'.$chdate.'"
        ], 
    ';
}
$string =  rtrim(trim($string), ',');
echo $string. '
    ]
}';
?>