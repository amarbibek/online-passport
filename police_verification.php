<?php
//session_start(); 
include('header.php');
include('menubar.php');
is_admin();
is_login();
?>

<?php
 echo $app_id=$_SESSION['app_id'];
?>
<?php	

 function insert($app_id,$verify){
 	
	$sql="INSERT INTO `police_verification` (`app_id`,`police_verification`) VALUES ('$app_id','$verify')";
	return mysql_query($sql) or die("ddnt!");
}
if(isset($_POST['submit'])){

echo $verify=$_POST['police'];
$result=insert($app_id,$verify);


if($result){
	echo "sucessfully uploaded";
	 header('Location:provide_passport.php');
}else{
	echo "failed";
}
}

?>
<div class="container">
<div class="jumbotron">
<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
		 	<div class="form-group">
	       		<label for="police" class="col-sm-3 control-label">Police verification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="checkbox" name="police"  class="form-control" id="police">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-3 col-sm-offset-4">
	  	   			<button type="submit" class="btn btn-primary form-control" name="submit">Submit</button>
	       		</div>
	        </div> 
	    </div>
</form>
</div>
</div>
