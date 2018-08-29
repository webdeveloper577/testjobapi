<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App;

class UsersController extends Controller
{
    //
	
	public function index (Request $request){
			
		$date = [];
		
		if (Input::has('get')) {			
			$GetValueParametr = Input::get('get');
			switch ($GetValueParametr){
				case 'list':
					$date = $this->fetchlist();
			
				break;
				case 'fulllist':
					$date = $this->fullfetchlist();
				break;
			}
			
		}
		
				
		//create new user
		if (Input::has('new')){
		
			if (Input::get('new') == 'true'){
				  $NewUser = App\Users::newUser(	[		  				  			   
					  0 => Input::get('email'),
					  1 => Input::get('last_name'),
					  2 => Input::get('first_name'),
					  3 => Input::get('state'),
					  4 => Input::get('password')
				  ]				 
			//	   $request->group			
				);
				$Answer = App\Groups::newString();
			//	$date = $this->datenewuser($NewUser);
				$date = $this->datenewuser($Answer);
			}
			
			
		}	
		
		return  $date;		
	}
		
	public function fetchlist(){
		
		$List = App\Users::getListUsers();		
		return view( 'outputjson' , compact('List'));
		
	} 
	
	public function fullfetchlist (){
		
		$FullList = App\Users::getFullListUsers();
		return view( 'outputjson' , compact('FullList'));
	}
	
	public function datenewuser($NewUser){
		return view( 'outputjson' , compact('NewUser'));
	}
		
	public function indexid(){
		
		$Date =[];
		
		if (Input::has('get')) {			
			$GetValueParametr = Input::get('get');
			switch ($GetValueParametr){
				case 'fullinfo':
					$Id = Input::get('id');
					$Date = $this->fetchinfouser($Id);					
				break;
				
			}
			
		}		
		
		 $ModifyUser = [];
		// new user
		if (Input::has('modify')){
			if (Input::get('modify') == 'true'){
				if (Input::has('id')){
					
					$ModifyUser[0] = Input::get('id');
					
					if (Input::has('email')){
						$ModifyUser[1] = Input::get('email');
					}else {
						$ModifyUser[1] = "";
					}
					if (Input::has('last_name')){
						$ModifyUser[2] = Input::get('last_name');
					} else{
						$ModifyUser[2] = "";
					}					
					if (Input::has('first_name')){
						$ModifyUser[3] = Input::get('first_name');
					} else{
						$ModifyUser[3] = "";
					}
					if (Input::has('state')){
						$ModifyUser[4] = Input::get('state');
					} else{
						$ModifyUser[4] = "";
					}
					if (Input::has('password')){
						$ModifyUser[5] = Input::get('password');
					} else{
						$ModifyUser[5] = "";
					}
	
					$DateModify = App\Users::modifyUser($ModifyUser);			
					$Date = $this->datemodifyuser($DateModify);
					
				}
			}			
		}
				
		return $Date;
	}
	
	public function fetchinfouser($Id){		
		$Info = App\Users::getInfoUser($Id);
		return view('outputjson', compact('Info'));		
	}
	//$ModifyUser
	public function datemodifyuser($DateModify){	
		
		return view( 'outputjson' , compact('DateModify'));
	}
		
	
}
