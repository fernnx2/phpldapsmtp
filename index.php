
<?php
require("header.php");
session_start();

if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
        header("location:auth/dashboard.php");
}
else{
unset($_COOKIE['user']);
unset($_COOKIE['password']);
setcookie("user",null,-1);
setcookie('password',null,-1);
unset($_SESSION['user']);
unset($_SESSION['password']);
unset($_SESSION['config']);

}



?>

	<div class="ed-container s-1-3"> <div class="ed-item s-1-2"><h2>Sign in</h2></div></div>

	<form  class="ed-container s-1-3" method="post" action="auth/authenticate.php">
		<div class="ed-container">
		<div class="ed-item s-1-2"><label>User</label></div>
		<div class="ed-item s-1-2"><input type="text" name="user" required/> </div>
		</div>
		<div class="ed-container">
		<div class="ed-item s-1-2">
		<label>Password:</label>
		</div>
		<div class="ed-item s-1-2">
		<input type="password" name="password" required/>
		</div>
		</div>
		<div class="ed-item">
		  <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar Session</button>
		</div>
	</form>

<?php
require("footer.php");
?>
