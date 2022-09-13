<?php
$current_file_name=basename($_SERVER['PHP_SELF']);
$file_last_modified= filemtime($current_file_name);
echo "Last modified". date("1, dS F, Y, h:ia", $file_last_modified)."\n";
?>