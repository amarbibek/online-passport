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
<br>
<?php
include('sidebar.php');
sidebar();
?>
</div>
<div class="col-md-9">
<?php 
if(isset($_POST['present_residential_address'])){
	$house_no=$_POST['house_no'];
	$village=$_POST['village'];
	$state_ut=$_POST['state_ut'];
	$district=$_POST['district'];
	$police_station=$_POST['police_station'];
	$pin=$_POST['pin'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$app_id=$_SESSION['app_id'];
	$query="INSERT INTO `present_residential_address_4` (`house_no`,`village`,`state_ut`,`district`,`police_station`,`pin`,`mobile`,`email`,`app_id`) VALUES ('$house_no','$village','$state_ut','$district','$police_station','$pin','$mobile','$email','$app_id') ";
	$result=mysql_query($query) or die("oops");
	if($result){
		header('location:permanent_address.php');
	}
}

 ?>
<!-- <div class="container"> -->
<h2>Present Residential Address</h2>
<div class="jumbotron">
	<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="house_no" class="col-sm-3 control-label">House No. And Street Name.: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="house_no"  class="form-control" id="house_no">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="village" class="col-sm-3 control-label">Village/Town/City: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="village"  class="form-control" id="village">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="state_ut" class="col-sm-3 control-label">State/UT: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="state_ut"  class="form-control" id="state_ut">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="district" class="col-sm-3 control-label">District: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="district"  class="form-control" id="district">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="police_station" class="col-sm-3 control-label">Police Station: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="police_station"  class="form-control" id="police_station">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="pin" class="col-sm-3 control-label">PIN : </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="pin"  class="form-control" id="pin">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="mobile" class="col-sm-3 control-label">Mobile : </label>
	       		<div class="col-sm-5">
	  	   			<input type="number" name="mobile"  class="form-control" id="mobile">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="email"  class="form-control" id="email">
	       		</div>
	       </div> 
	    </div>
	    <br>
	     <div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-1">
	  	   		<button type="submit" class="btn btn-primary form-control" name="present_residential_address">Next>></button>
	       	</div>
	    </div> 
<!-- 	</div> -->


</div>
</div>