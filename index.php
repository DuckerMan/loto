<?php
include'config/maincfg.inc';



if(strcmp($url,$main_uri)==0){
	
	include "controller/".$start_controller.".php";
	$page=new start;
	$page->index();
}

else {
	$arr=explode("/",$url);
	//print_r($arr);
	if(is_file("controller/".$arr[2].".php")){
		include"controller/".$arr[2].".php";
		
		$page=new $arr[2];
		$page->$arr[3]();
	}
	else{
		include "controller/".$start_controller.".php";
		$page=new start;
		$page->index();
	}
}


