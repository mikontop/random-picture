<?php
$arr=file('images.txt');
$n=count($arr)-1;
$x=rand(0,$n);
header("Location:".$arr[$x],"\n");
?>
