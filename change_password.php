<?php 
include('header.php');
include('menubar.php');
is_login();
?>
<?php
	if (isset($_POST['change'])){
		$login_id=$_SESSION['login'];
		$current=$_POST['current'];
		$new=$_POST['new'];
		$new_again=$_POST['new_again'];
		if($new!="" && $new_again!="" && $current!=""){
			
		$sql="SELECT `password` FROM `register` WHERE `login_id`='$login_id'";
		$result=mysql_query($sql) OR die("didnt work");
		if ($result){
			if(mysql_num_rows($result)>=1){
			while ($row=mysql_fetch_array($result)) {
				if ($current==$row['password']){
					//echo "password is correct!!";
					
					if ($new==$new_again){
						//now we can change password here
						$sql="UPDATE `register` SET `password`='$new' WHERE `login_id`='$login_id'";
						$result=mysql_query($sql) OR die("Update query didn't work!");
						if ($result){
							echo "Password changed successfully!";
							session_unset();
						}
					}else{
						echo "Password didn't match!!!";
					}

				}else{
					echo "password is incorrect!!";
				}
			
			}
		}
		}
		
		}else{
				echo " fields can't be null!!";
			}
	}

?>
<div class="container">
<div class="jumbotron">

<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="current" class="col-sm-3 col-md-offset-1 control-label">Current Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="current"  class="form-control" id="current" placeholder="Enter your current password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
	    <div class="form-group">
			<label for="new" class="col-sm-3 col-md-offset-1 control-label">New Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="new"  class="form-control" id="new" placeholder="Enter your new password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
	     <div class="form-group">
			<label for="new_again" class="col-sm-3 col-md-offset-1 control-label">Re-Password </label>
	       		<div class="col-sm-6 ">
	  	   			<input type="text" name="new_again"  class="form-control" id="new_again" placeholder="Re-enter your new password..." required >
	       		</div>
	       </div> 
	    </div>
	    <br>
	    
<!-- <label>Current Password&nbsp;&nbsp;:</label><input  type="text" name="current" placeholder="Enter your current password..." required /></br>

<label>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="new" placeholder="Enter your new password..." required/></br>
<label>Re-password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label><input type="text" name="new_again" placeholder="Re-enter your new password..." required/></br> -->
	<div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-4">
	  	   		<button type="submit" class="btn btn-primary form-control" name="change">Change Password</button>
	       	</div>
	    </div> 
	</div>
<!-- <input id="button" type="submit" name="change" value="Change Password"/> -->
</form>
</div>
	
</div>