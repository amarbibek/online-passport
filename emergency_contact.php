<?php 
include('header.php');
include('menubar.php');
// include('sidebar.php');
// sidebar();
is_login();
?>
<div class="container-fluid">


<div class="col-md-3">
<br>
<br>
<br>

<?php
include('sidebar.php');
sidebar();
?>
</div>
<div class="col-md-9">
<?php 
if(isset($_POST['emergency_contact'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$app_id=$_SESSION['app_id'];
	$query="INSERT INTO `emergency_contact_6` (`name`,`address`,`contact`,`email`,`app_id`) VALUES ('$name','$address','$contact','$email','$app_id')";
	$result=mysql_query($query) or die("ddnt wrk");
	if($result){
		header('location:references.php');
	}
}

 ?>
<!-- <div class="container"> -->
<h2>Emergency Contact</h2>
<div class="jumbotron">
	<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Name</label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="name"  class="form-control" id="name">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="address" class="col-sm-3 control-label">Address </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="address"  class="form-control" id="address">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="mobile" class="col-sm-3 control-label">Mobile </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="contact"  class="form-control" id="mobile">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="email"  class="form-control" id="email">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    
	    <div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-1">
	  	   		<button type="submit" class="btn btn-primary form-control" name="emergency_contact">Next>></button>
	       	</div>
	    </div> 
	</div>
</form>
</div>
<!-- </div> -->
</div>
</div>