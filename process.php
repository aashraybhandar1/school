<?php
require_once('config.php');
require_once('functions.php');
$link=f_sqlConnect(DB_USER,DB_PASSWORD,DB_NAME);
$_POST=f_clean($_POST);

$keys=implode(",",(array_keys($_POST))); //seperates keys as a string
$values=implode("', '", array_values($_POST));
/*$sql='SELECT * FROM login_details where email= "'.$_POST['email'].'"';
$res=mysql_query($sql);
if($res && mysql_num_rows($res) >0){
	die("This email id has alaready been taken");
}*/
$sql="INSERT INTO school_table ($keys) VALUES ('$values')";
if(!mysql_query($sql)){
	die("Error:404");
}
mysql_close();
$url='http'.((!empty($_SERVER['HTTPS']))? "s":"")."://".$_SERVER['SERER_NAME'].$_SERVER['REQUEST_URI'];
$redirect=str_replace('process.php','details.html',$url);

header("Location:$redirect");
echo"yolo";
?>