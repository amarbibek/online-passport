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
if(isset($_POST['references'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	
	$name1=$_POST['name1'];
	$address1=$_POST['address1'];
	$contact1=$_POST['contact1'];
	$app_id=$_SESSION['app_id'];

	


	$query="INSERT INTO `references_7` (`name`,`address`,`contact`,`name1`,`address1`,`contact1`,`app_id`) VALUES ('$name','$address','$contact','$name1','$address1','$contact1','$app_id')";
	$result=mysql_query($query) or die("ddnt wrk");
	if($result){
		header('location:preview_application_form.php');
	}
}

 ?>
<!-- <div class="container"> -->
<h2>References Form</h2>
<div class="jumbotron">
	<form action="" method="POST">
	  <div class="row">
		 	<div class="form-group">
			<label for="mobile" class="col-sm-3 control-label">First Reference </label>
	       		
	       </div> 
	    </div>
	    <br>
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
			<label for="mobile" class="col-sm-3 control-label">Second Reference </label>
	       		
	       </div> 
	    </div>
	    <br>
	    		<div class="row">
		 	<div class="form-group">
			<label for="name1" class="col-sm-3 control-label">Name</label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="name1"  class="form-control" id="name1">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="address1" class="col-sm-3 control-label">Address </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="address1"  class="form-control" id="address1">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="mobile1" class="col-sm-3 control-label">Mobile </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="contact1"  class="form-control" id="mobile1">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    
	    <div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-1">
	  	   		<button type="submit" class="btn btn-primary form-control" name="references">Next>></button>
	       	</div>
	    </div> 
	</div>
</form>
</div>
<!-- </div> -->
</div>
</div>