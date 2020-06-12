<div class="logo">
<div class="container-fluid">
	<div class="col-md-8">
		<img src="images/logo_black.jpg" height="185px">
	</div> 
	<div class="col-md-4 ">
	<div class="login_items pull-right">
<?php 
session_start();
if(isset($_SESSION['admin'])){
	echo '<a href="requests.php">ADMIN</a>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<a href="change_password.php">CHANGE PASSWORD</a>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<a href="logout.php">LOGOUT</a>';
	}elseif(isset($_SESSION['login'])){
	echo '<a href="change_password.php">CHANGE PASSWORD</a>';
	echo '&nbsp;&nbsp;&nbsp;&nbsp;';
	echo '<a href="logout.php">LOGOUT</a>';
	}
	else{
		echo '<a href="login.php">LOGIN</a>';
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		echo '<a href="register.php">REGISTER</a>';
	}
 ?>
 </div>
</div>
</div>
</div>
