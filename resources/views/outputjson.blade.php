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
	
	if (isset($NewUser)){
		echo json_encode($NewUser);
	}
	
	//for user
	if (isset($Info)){
		echo json_encode($Info);
	}	
	
	if (isset($DateModify)){
		echo json_encode($DateModify);
	
	}
	
?>
	


	
	
	
	

 
 