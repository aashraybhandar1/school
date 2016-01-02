<?php
function f_sqlconnect($user,$pass,$db){
	$link=mysql_connect('localhost',$user,$pass);
	if(!$link){
		die("could not connect.. try again");
	}
	$db_selected=mysql_select_db($db,$link);
	if(!$db_selected){
		die("could not connect.. try again");
	}
}
function f_clean($array){
	return array_map('mysql_real_escape_string',$array);
}
?>