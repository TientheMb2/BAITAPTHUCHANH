<?php
$file= basename($_SERVER['PHP_SELF']);
$no_of_lines =count(file($file));
echo "Co $no_of_lines dong trong $file"."\n";
?>