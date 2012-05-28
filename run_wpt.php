<?php

require("util/wpt_credentials_urls.php");
require("util/fileio.php");

$wpt_url = "http://www.webpagetest.org/runtest.php?f=xml&private=1&k=$key&url=";


for($x=0;$x<count($urls_to_benchmark); $x++){
	$wpt_response = file_get_contents($wpt_url . $urls_to_benchmark[$x]);
	$xml = new SimpleXMLElement($wpt_response);
	if($xml->statusCode == 200){
		appendToFile($xml->data->xmlUrl, $csvFiles);
	}
}	


?>