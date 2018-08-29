<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
	public static function getListUsers(){
		
		$Users = Users::all();
		$List = [];
		$i = 0;
		foreach ($Users as $User){
			$List[$i] = $User->last_name;
			++$i;
		}
		
		return $List;
	}
	
	public static function getFullListUsers(){
		
		$Users = Users::all();
		
		return $Users;
	}
	
	public static function newUser($ArrayNU){
		
		$Users = new Users;	
		
		$Users->email = $ArrayNU[0];
		$Users->last_name = $ArrayNU[1];
		$Users->first_name = $ArrayNU[2];		
		$Users->state = $ArrayNU[3];
		$Users->password = $ArrayNU[4];
		
		$Users->save();
		
		return 'true';
	}
	
	public static function getInfoUser($id = 0){
		
		$Users = Users::all();
		
		if ($id > 0){	
		
			$Info = [];			
			foreach ($Users as $InfoUser){
				if ($InfoUser->id = $id){
					$Info = $InfoUser;
					break;
				}							
			}
			
			return $Info;			
		}else{
			return 'nodefinated';
		}
				
	}
	
	public static function modifyUser($ArrayMU){		
		 
		$modifyUser = Users::find($ArrayMU[0]);   
		if ($ArrayMU[1] !== ""){
			$modifyUser->email = $ArrayMU[1];  
		}
		if ($ArrayMU[2] !== ""){
			$modifyUser->last_name = $ArrayMU[2]; 
		}
		if ($ArrayMU[3] !== ""){
			$modifyUser->first_name = $ArrayMU[3];	
		}
		if ($ArrayMU[4] !== ""){
			$modifyUser->state = $ArrayMU[4];
		}
		if ($ArrayMU[5] !== ""){
			$modifyUser->password = $ArrayMU[5];
		}
			
		$modifyUser->save();
		
		return 'true';
	}
	
	
}
