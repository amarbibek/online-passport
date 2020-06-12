<?php
//session_start(); 
include('header.php');
include('menubar.php');
is_login();
is_admin();
?>

<?php
$_SESSION['app_id']= $app_id=$_GET['app_id'];
?>
<?php	

 function insert($app_id,$id_proof,$address,$picture){
 	
	$sql="INSERT INTO `documents` (`app_id`,`id_proof`,`address`,`picture`) VALUES ('$app_id','$id_proof','$address','$picture')";
	return mysql_query($sql) or die("ddnt!");
}
if(isset($_POST['submit'])){

$id_proof=$_FILES['id_proof']['name'];
$tem_storage=$_FILES['id_proof']['tmp_name'];
$storage="documents/";
move_uploaded_file($tem_storage,$storage.$id_proof);

$address=$_FILES['address']['name'];
$tem_storage1=$_FILES['address']['tmp_name'];
$storage1="documents/";
move_uploaded_file($tem_storage1,$storage1.$address);

$picture=$_FILES['picture']['name'];
$tem_storage2=$_FILES['picture']['tmp_name'];
$storage2="documents/";
move_uploaded_file($tem_storage2,$storage2.$picture);
//$pick_id=$_SESSION['id'];
$result=insert($app_id,$id_proof,$address,$picture);


if($result){
	echo "sucessfully uploaded";
	 header('Location:police_verification.php');
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
	       		<label for="id_proof" class="col-sm-3 control-label">ID Proof&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="file" name="id_proof"  class="form-control" id="id_proof">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="address" class="col-sm-3 control-label">Address Proof &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="file" name="address"  class="form-control" id="address">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="picture" class="col-sm-3 control-label">Picture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="file" name="picture"  class="form-control" id="picture">
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
