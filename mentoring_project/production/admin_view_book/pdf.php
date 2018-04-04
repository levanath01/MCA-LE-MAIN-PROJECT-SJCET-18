<?php 

session_start();

$filet= $_SESSION['varname']; ?>


<?php
$file='$filet';
$filename='download.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline;filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);




?>






