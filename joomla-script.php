<?php
$url = "http://joomlacode.org/gf/download/frsrelease/17715/77262/Joomla_2.5.8-Stable-Full_Package.zip"; 
$file ="Joomla_2.5.8-Stable-Full_Package.zip";
$esc =
escapeshellarg($url);
exec("wget " . $esc);
$shell = "unzip $file"; 
$shell = escapeshellcmd($shell);
exec($shell,$nu);
$del = “rm $file“;
exec($del,$nu); 
print_r("Complete!");
?>