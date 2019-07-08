<?php 
	header("Content-type: text/xml"); 
	$test_array = array ( 
		'Stefan' => 'Vlasnik',
		'BMW' => 'Marka' , 
		'2015' => 'Godiste' ,
	 ); 
	$xml = new SimpleXMLElement('<root/>'); 
	array_walk_recursive($test_array, array ($xml, 'addChild')); print $xml->asXML(); 

?>