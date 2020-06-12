<?php
//session_start(); 
include('header.php');
include('menubar.php');
is_login();
is_admin();
?>
<?php
$app_id=$_SESSION['app_id'];
$query="SELECT * FROM `applicant_details_2` WHERE `app_id`='$app_id'";
$results=mysql_query($query) or die("could not fetch data");
if($results){
	while ($res=mysql_fetch_array($results)) {
		 $surname=$res['lname'];
		 $name=$res['name'];
		 $dob=$res['dob'];
		 $gender=$res['gender'];
		 $issue=date("y/m/d");
		 $expiry=date("y/m/d", strtotime('+10 years')) ;
		
	}
}
$query1="SELECT * FROM `documents` WHERE `app_id`='$app_id'";
$result=mysql_query($query1) or die("could not fetch picture");
if($result){
	while ($row=mysql_fetch_array($result)) {
		 $picture=$row['picture'];
		
	}
}
?>
<div class="container">
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Passport No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $app_id; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Sur Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $surname; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $name; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Indian </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $dob; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $gender; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Date of Issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $issue; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="police" class="col-sm-3 control-label">Date of Expiry &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $expiry; ?> </label>
	       	
	      </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       <img src="documents/<?php echo $picture; ?> ">
	       	
	      </div> 
	</div>
	<br>
</div>