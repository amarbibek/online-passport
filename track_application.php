<?php 
include('header.php');
include('menubar.php');
is_login();
?>
<div class="container">
<div class="jumbotron">
<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
	       		<label for="app_id" class="col-sm-3 control-label">Enter Application ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-4">
	  	   			<input type="number" name="app_id"  class="form-control" id="app_id">
	       		</div>
	       		<div class="col-sm-4">
	       			<button type="submit" class="btn btn-primary form-control" name="track">Login</button>
	       		</div>
	       </div> 
	    </div>
	    
</form>
</div>
</div>
<?php 
 if(isset($_POST['track'])){
 	$app_id=$_POST['app_id']; 
 	if($app_id!=""){
 	 $query="SELECT * FROM `police_verification` WHERE `app_id`='$app_id'";
 	
	$result=mysql_query($query) or die("oops from track application!");
	if($result){
		if(mysql_num_rows($result)>=1){
			while($row=mysql_fetch_array($result)){			
				if($row['police_verification']=="on"){
					 echo'<div class="alert alert-success" role="alert"><h4>Congrats machi !, Passport Issued !!!</h4></div>';
					 $_SESSION['mail_text']="Congrats machi !, Passport Issued !!!";
					 exit;
					}else{
						 echo'<div class="alert alert-danger" role="alert"><h4>Passport Rejected during police verification!!</h4></div>';
						 $_SESSION['mail_text']="Passport Rejected during police verification!!";
						 exit;
					}
			}
		
		}
	}
	//police verification code ends here
	$query="SELECT * FROM `documents` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from track application!");
	if($result){
		if(mysql_num_rows($result)>=1){
					 echo'<div class="alert alert-info" role="alert"><h4>Stay tuned macha, Waiting for police verification !!!</h4></div>';
					 $_SESSION['mail_text']="Stay tuned macha, Waiting for police verification !!!";
					 header('location:send mail/index.php');

					 exit;
					 }
					 	
					
 }
 //document verification

 	$query="SELECT * FROM `paid_users` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from track application!");
	if($result){
		if(mysql_num_rows($result)>=1){
					 echo'<div class="alert alert-info" role="alert"><h4>Waiting for Document verification , Please submit the required documents to the passport office!!!</h4></div>';
					 $_SESSION['mail_text']="Waiting for Document verification , Please submit the required documents to the passport office!!!";
					 exit;
					 }
					 	
					
 }
 //paid users 

 	$query="SELECT * FROM `registered_users` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from track application!");
	if($result){
		if(mysql_num_rows($result)>=1){
					 echo'<div class="alert alert-info" role="alert"><h4>Make the Payment for further procedure!!!</h4></div>';
					 $_SESSION['mail_text']="Make the Payment for further procedure!!!";
					 exit;
					 }
					 	
					
 }
 	echo'<div class="alert alert-info" role="alert"><h4>ID not found!!! Are you sure you filled the form completely???</h4></div>';
 	// $_SESSION['mail_text']="Make the Payment for further procedure!!!";
 	exit;
 
 //paid users 


}else{
	echo'<div class="alert alert-danger" role="alert"><h4>ID is null.</h4></div>';
}

}//main if closing
 ?>

<?php
include("footer.php");
?>