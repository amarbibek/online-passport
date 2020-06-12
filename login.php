<?php
//session_start(); 
include('header.php');
include('menubar.php');
?>
<?php
if(isset($_POST['login'])){
	$login_id=$_POST['login_id'];
	$password=$_POST['password'];

	$query="SELECT * FROM `register` WHERE `login_id`='$login_id' AND `password`='$password' AND `active`='1'";
	$result=mysql_query($query) or die("query ddnt work!");
	if (mysql_num_rows($result)==1){
		while($row=mysql_fetch_array($result)){
			echo $type=$row['type'];
			if($type==1){
				$_SESSION['admin']="admin";
				header('location:requests.php');
			}
		}
		$_SESSION['login']=$login_id;
		header('Location:index.php');
	}
}
?>

<div class="container">
<div class="jumbotron">
<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
	       		<label for="login_id" class="col-sm-3 control-label">Login ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="login_id"  class="form-control" id="login_id">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="password" class="col-sm-3 control-label">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="password"  class="form-control" id="password">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-3 col-sm-offset-4">
	  	   			<button type="submit" class="btn btn-primary form-control" name="login">Login</button>
	       		</div>
	        </div> 
	    </div>
</form>
</div>
</div>