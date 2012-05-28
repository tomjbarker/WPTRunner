<?php
function appendToFile($data, $file){
	$writeFlag = "w";
	if(file_exists($file)){
			$writeFlag = "a";
	}	
	$fh = fopen($file, $writeFlag) or die("can't open file");
	fwrite($fh, $data . "\n");
	fclose($fh);
}

?>