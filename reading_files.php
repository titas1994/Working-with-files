<?php
$file = "example.txt";

if($handle = fopen($file, 'r')){

	//echo $content = fread($handle,20); // each bite equals a character
	echo $content = fread($handle,filesize($file));
fclose($handle);

} else{

	echo "The files could not write";
}
?>