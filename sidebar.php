<div class="">
	<?php 
	function sidebar(){
		echo'<div class="sidebar">';
		$app_id=$_SESSION['app_id'];
	$query="SELECT * FROM `passport_type_1` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">Passport Type</label>';
		}else{ 
		 echo'<label class="lbl" style="background-color:#EAEDED;">Passport Type</label>';
		}
	}
echo"<br/>";
	$query="SELECT * FROM `applicant_details_2` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">Applicant Details</label>';
	}else{
		 echo'<label class="lbl" style="background-color:#EAEDED;">Applicant Details</label>';
	}
}
echo"<br/>";
	$query="SELECT * FROM `family_details_3` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">Family Details</label>';
	}else{
		 echo'<label class="lbl" style="background-color:#EAEDED;">Family Details</label>';
	}
}
echo"<br/>";
	$query="SELECT * FROM `present_residential_address_4` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">Present Residential Address</label>';
	}else{
		 echo'<label class="lbl"  style="background-color:#EAEDED;">Present Residential Address</label>';
	}
}
echo"<br/>";
	$query="SELECT * FROM `permanent_address_5` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">Permanent Address</label>';
	}else{
		 echo'<label class="lbl" style="background-color:#EAEDED;">Permanent Address</label>';
	}
}
echo"<br/>";
	$query="SELECT * FROM `emergency_contact_6` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl"  style="background-color:#808B96;">Emergency Conatct</label>';
	}else{
		 echo'<label class="lbl" style="background-color:#EAEDED;">Emergency Conatct</label>';
	}
}
echo"<br/>";
	$query="SELECT * FROM `references_7` WHERE `app_id`='$app_id'";
	$result=mysql_query($query) or die("oops from sidebar!");
	if($result){
		if(mysql_num_rows($result)>=1){
		 echo'<label class="lbl" style="background-color:#808B96;">References</label>';
	}else{
		 echo'<label class="lbl" style="background-color:#EAEDED;">References</label>';
	}
}
	


echo'</div>';

}//closing of function
	 ?>
</div>