<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Input;


class Groups extends Model
{
    //
	public static function getListGroups(){		
		
		$List = Schema::getColumnListing('Groups');
		
		return $List;
	}
	
	public static function newGroup($NameGroupVar){		
					
		Schema::table('groups', function ($table){			
					
					$List = Groups::getListGroups();
					$Number = count($List);	
					$NameGroup = Input::get('name');
				
					$table->string($NameGroup)->after('administrators');			
					
				});
				
		$NameGroup = Input::get('name');		
		$Groups = Groups::all();
					foreach ($Groups as $Element){
						$id = $Element->id;
						$Group = Groups::find($id);
						$Group->$NameGroup = 'false';
						++$id;
						$Group ->save();
					} 					
				
		return 'true';
		
	}
	
	public static function getFullListGroups(){
		$FullList = Groups::all();
		return $FullList;
	}
	
	
	public static function newString(){
		
		$List = Groups::getListGroups();
		$Groups = new Groups;
		$Text = "";		
		foreach ($List as $Column){
			if($Column != 'created_at' && $Column != 'updated_at'){
				if ($Column != 'id'  ){			
					$Groups->$Column = 'false';
				}else {				
					$Groups->$Column = 20;
				}
			}else {
				break;
				}			
			
		}
		
		 $Groups->save();
		
		return true;
		
	}
	
	
	
	
	
	
	public static function modifyGroup($Column){
		
		$NameColumn = $Column['group'];		
		
		$UserString = Groups::find($Column['idstring']);
		$UserString->$NameColumn = $Column['value'];			
		$result = $UserString->save();
			
		return "true";
	
	}
	
	
}
