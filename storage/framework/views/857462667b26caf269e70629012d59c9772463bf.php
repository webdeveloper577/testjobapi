<?php
	
	$DateJSON = "";
	
	if (isset($List)){
		echo json_encode($List);
	}
	
	if (isset($FullList)){
		foreach ($FullList as $User){
			$DateJSON = $DateJSON.json_encode($User);
		} 
		echo $DateJSON;
	}
	
?>
	


	
	
	
	

 
 