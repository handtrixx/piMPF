<?php
$string = ""; 
$string = isset($_POST['string']) ? $_POST['string'] : '';
$string= !empty($_POST['string']) ? $_POST['string'] : '';

$string = '<?php $config=\''.$string.'\';echo $config; ?>'; 
file_put_contents('../config.php', $string);
?>


