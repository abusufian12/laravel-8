<?php
namespace App\Helpers;

/**
 * 
 */
class Helper
{
	
	public static function test(){
		$value = "Hello Helpers";
		return $value;
	}


	public static function roleStatus(){
		$status=['Active', 'Deactive'];
		return $status;
	}
}
?>