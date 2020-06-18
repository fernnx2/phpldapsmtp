<?php 

require("auth.php");
function  sessioncookie(){
$type='cookie';
if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
	auth($_COOKIE['user'],$_COOKIE['password'],$type);
	header("location:dashboard.php");
}
else {
	header("location:../index.php");
}

}

?>
