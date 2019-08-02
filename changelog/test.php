<?php 
$i =0;
foreach (glob("./*.*") as $filename) {$dirlist[$i++] = $filename;}
arsort($dirlist);
foreach( $dirlist as $filename ) {echo $filename;} 
?>