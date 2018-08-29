<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class GroupsController extends Controller
{
    //
	public function index (Request $request){
			
		$date =[];
		
		if (Input::has('get')) {			
			$GetValueParametr = Input::get('get');
			switch ($GetValueParametr){
				case 'list':
					$date = $this->fetchlist();			
				break;
				case 'fulllist':
					$date = $this->fetchfulllist();
				break;
			}
			
		}
				
		if (Input::has('new')){
			if (Input::get('new') == true){
				$date = $this->newgroup();					
			}
		}
				
		return $date;
	}
	
	public function fetchlist(){
		
		$List = App\Groups::getListGroups();		
		return view( 'outputjsongroups' , compact('List'));
		
	}
	
	public function fetchfulllist(){
		$List = App\Groups::getFullListGroups();
		return view('outputjsongroups', compact('List'));
	}
	
	public function newgroup(){
				
		$Date = App\Groups::newGroup(Input::get('name'));
		return view( 'outputjsongroups' , compact('Date'));
	}
	
	//Request $request 
	public function indexid (){
	
		$Date = "";
		// new user
		if (Input::has('modify')){
			if (Input::get('modify') == 'true'){
				if (Input::has('group')){							
					if (Input::has('idstring') && Input::has('value')){
						$Column['group'] = (Input::get('group'));
						$Column['idstring'] = Input::get('idstring');						
						$Column['value'] = Input::get('value');												
						$Date = $this->datemodifygroup($Column);						
					}					
				}
			}			
		}
		
		return $Date;
		
	}
	
	public function datemodifygroup($Column){
		
		$ModifyGroup = App\Groups::modifyGroup($Column);			
		return view( 'outputjsongroups' , compact('ModifyGroup'));
	}				
	
}
