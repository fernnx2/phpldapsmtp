<?php 

require("auth.php");
$type="post";
auth($_POST['user'],$_POST['password'],$type);

?>
