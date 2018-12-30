<?php
$files = array();


$files = glob("/path/to/directory/*.{jpg,JPG,jpeg,JPEG,gif,GIF,png,PNG}", GLOB_BRACE);
foreach (glob("images/*.{jpg,JPG,jpeg,JPEG,gif,GIF,png,PNG}", GLOB_BRACE) as $file) {
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
    
    $size = bcdiv(filesize($file), '1048576', 2);  // 16.007
    
    $string=$string. ' 
        ["'.$file.'",
        "'.$file.'",
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






<?php /*
echo '
{
  "data": [
    [
      "Tiger Nixon",
      "System Architect",
      "Edinburgh",
      "5421"
    ],
    [
      "Garrett Winters",
      "Accountant",
      "Tokyo",
      "8422"
    ],
    [
      "Ashton Cox",
      "Junior Technical Author",
      "San Francisco",
      "1562"
    ],
    [
      "Cedric Kelly",
      "Senior Javascript Developer",
      "Edinburgh",
      "6224"
    ],
    [
      "Airi Satou",
      "Accountant",
      "Tokyo",
      "5407"
    ],
    [
      "Brielle Williamson",
      "Integration Specialist",
      "New York",
      "4804"
    ],
    [
      "Herrod Chandler",
      "Sales Assistant",
      "San Francisco",
      "9608"
    ],
    [
      "Rhona Davidson",
      "Integration Specialist",
      "Tokyo",
      "6200",
      "2010/10/14",
      "$327,900"
    ],
    [
      "Colleen Hurst",
      "Javascript Developer",
      "San Francisco",
      "2360"
    ]
  ]
}
';
*/?>