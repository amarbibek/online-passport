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
if(isset($_POST['family_details'])){
	$father_name=$_POST['father_name'];
	$father_surname=$_POST['father_surname'];
	$mother_name=$_POST['mother_name'];
	$mother_surname=$_POST['mother_surname'];
	$guardian_name=$_POST['guardian_name'];
	$guardian_surname=$_POST['guardian_surname'];
	$app_id=$_SESSION['app_id'];
	$query="INSERT INTO `family_details_3` (`father_name`,`father_surname`,`mother_name`,`mother_surname`,`parent_name`,`parent_surname`,`app_id`) VALUES ('$father_name','$father_surname','$mother_name','$mother_surname','$guardian_name','$guardian_surname','$app_id')";
	$result=mysql_query($query) or die("ddnt wrk");
	if($result){
		header('location:present_residential_address.php');
	}
}

 ?>
<!-- <div class="container"> -->
<h2>Family Details</h2>
<strong>Please enter Father,Mother or Legal Guardian Names as applicable (specifying at least one of these is mandatory).</strong>
<div class="jumbotron">
	<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="father_name" class="col-sm-3 control-label">Father's Given Name (First Name + Middle Name) </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="father_name"  class="form-control" id="father_name">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="father_surname" class="col-sm-3 control-label">Surname </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="father_surname"  class="form-control" id="father_surname">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="mother_name" class="col-sm-3 control-label">Mother's Given Name (First Name + Middle Name) </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="mother_name"  class="form-control" id="mother_name">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="mother_surname" class="col-sm-3 control-label">Surname</label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="mother_surname"  class="form-control" id="mother_surname">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="guardian_name" class="col-sm-3 control-label">Legal Guardian's Given Name (If applicable) </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="guardian_name"  class="form-control" id="guardian_name">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="guardian_surname" class="col-sm-3 control-label">Surname</label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="guardian_surname"  class="form-control" id="guardian_surname">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-1">
	  	   		<button type="submit" class="btn btn-primary form-control" name="family_details">Next>></button>
	       	</div>
	    </div> 
	</div>
</form>
</div>
<!-- </div> -->


</div>
</div>