<?php 
include('header.php');
include('menubar.php');
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
if(isset($_POST['applicant_details'])){
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender']; 
	$dob=$_POST['dob'];
	$place_of_birth=$_POST['place_of_birth'];
	$state_ut=$_POST['state_ut'];
	$district=$_POST['district'];
	$marital_status=$_POST['marital_status'];
	$citizenship=$_POST['citizenship'];
	$pan=$_POST['pan'];
	$voter_id=$_POST['voter_id'];
	$employment_type=$_POST['employment_type'];
	$gov_servent=$_POST['gov_servent'];
	$qual=$_POST['qual'];
	$adhar_no=$_POST['adhar_no'];
	$app_id=$_SESSION['app_id'];
	$query="INSERT INTO `applicant_details_2` (`name`,`lname`,`gender`,`dob`,`place_of_birth`,`state_ut`,`district`,`marital_status`,`citizenship`,`pan`,`voter_id`,`employment_type`,`gov_servent`,`qual`,`adhar_no`,`app_id`) VALUES ('$name','$lname','$gender','$dob','$place_of_birth','$state_ut','$district','$marital_status','$citizenship','$pan','$voter_id','$employment_type','$gov_servent','$qual','$adhar_no','$app_id') ";

	$result=mysql_query($query) or die("didnt wrkd");
	if($result){
		header('location:family_details.php');
	}
}

 ?>

<h2>Applicant Details</h2>
<div class="jumbotron">
	<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Given Name </label>
	       		<div class="col-sm-6 col-md-offset-1">
	  	   			<input type="text" name="name"  class="form-control" id="name">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
			<label for="lname" class="col-sm-3 control-label">Surname </label>
	       		<div class="col-sm-6 col-md-offset-1">
	  	   			<input type="text" name="lname"  class="form-control" id="lname">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		<div class="form-group">
		<label for="gender" class="col-sm-3 control-label"> Gender </label>
	      	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="radio" name="gender" id="gender" group="gender" value="male"> Male <br>
	  	   		<input type="radio" name="gender" id="gender" group="gender" value="female"> Female <br>
	  	   		<input type="radio" name="gender" id="gender" group="gender" value="transgender"> Transgender <br>
	       	</div>
	    </div> 
	</div>
	<br>
<!-- 	<div class="row">
		<div class="form-group">
		<label for="aliases" class="col-sm-3 control-label"> Have you ever been known by other names (aliases)? </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="aliases" id="aliases" group="aliases" value="yes"> Yes
	  	   		<input type="radio" name="aliases" id="aliases" group="aliases" value="no"> No
	       	</div>
	    </div> 
	</div>
	<br> -->
<!-- 	<div class="row">
		<div class="form-group">
		<label for="name_change" class="col-sm-3 control-label"> Have you ever changed your name? </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="name_change" id="name_change" group="name_change" value="yes"> Yes
	  	   		<input type="radio" name="name_change" id="name_change" group="name_change" value="no"> No
	       	</div>
	    </div> 
	</div>
	<br> -->
	<div class="row">
		<div class="form-group">
		<label for="dob" class="col-sm-3 control-label">Date of Birth </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="date" name="dob"  class="form-control" id="dob">
	       	</div>
	    </div> 
	</div>
	<br>	
<!-- 	<div class="row">
		<div class="form-group">
		<label for="birth_country" class="col-sm-3 control-label"> Is your Place of Birth out of India? </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="birth_country" id="birth_country" group="birth_country" value="yes"> Yes
	  	   		<input type="radio" name="birth_country" id="birth_country" group="birth_country" value="no"> No
	       	</div>
	    </div> 
	</div>
	<br> -->
	<div class="row">
		<div class="form-group">
		<label for="place_of_birth" class="col-sm-3 control-label">Place of Birth (Village/Town/City) </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="text" name="place_of_birth"  class="form-control" id="place_of_birth">
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="state_ut" class="col-sm-3 control-label"> State/UT </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<select name="state_ut" id="state_ut" class="form-control">
	  	   			<option disabled="disable">----- Select -----</option>
					<option value="2">Andaman &amp; Nicobar</option>
				    <option value="3">Andhra Pradesh</option>
				    <option value="4">Arunachal Pradesh</option>
				    <option value="5">Assam</option>
				    <option value="6">Bihar</option>
				    <option value="7">Chandigarh</option>
				    <option value="8">Chhattisgarh</option>
				    <option value="9">Dadra And Nagar Haveli</option>
				    <option value="10">Daman And Diu</option>
				    <option value="11">Delhi</option>
				    <option value="12">Goa</option>
				    <option value="13">Gujarat</option>
				    <option value="14">Haryana</option>
				    <option value="15">Himachal Pradesh</option>
				    <option value="16">Jammu And Kashmir</option>
				    <option value="17">Jharkhand</option>
				    <option value="18">Karnataka</option>
				    <option value="19">Kerala</option>
				    <option value="20">Lakshadweep</option>
				    <option value="21">Madhya Pradesh</option>
				    <option value="22">Maharashtra</option>
				    <option value="23">Manipur</option>
				    <option value="24">Meghalaya</option>
				    <option value="25">Mizoram</option>
				    <option value="26">Nagaland</option>
				    <option value="27">Odisha</option>
				    <option value="28">Puducherry</option>
				    <option value="29">Punjab</option>
				    <option value="30">Rajasthan</option>
				    <option value="31">Sikkim</option>
				    <option value="32">Tamil Nadu</option>
				    <option value="39">Telangana</option>
				    <option value="33">Tripura</option>
				    <option value="34">Uttar Pradesh</option>
				    <option value="35">Uttarakhand</option>
				    <option value="36">West Bengal</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 <div class="form-group">
	       	<label for="district" class="col-sm-3 control-label"> District </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<select name="district" id="district" class="form-control">
	  	   			<option disabled="disable">----- Select -----</option>
					<option value="2">Azamgarh</option>
				    <option value="3">Bijaywada</option>
				    <option value="4">Arunachal Pradesh</option>
				    <option value="5">Assam</option>
				    <option value="6">Bihar</option>
				    <option value="7">Chandigarh</option>
				    <option value="8">Chhattisgarh</option>
				    <option value="9">Dadra And Nagar Haveli</option>
				    <option value="10">Daman And Diu</option>
				    <option value="11">Delhi</option>
				    <option value="12">Goa</option>
				    <option value="13">Gujarat</option>
				    <option value="14">Haryana</option>
				    <option value="15">Himachal Pradesh</option>
				    <option value="16">Jammu And Kashmir</option>
				    <option value="17">Jharkhand</option>
				    <option value="18">Karnataka</option>
				    <option value="19">Kerala</option>
				    <option value="20">Lakshadweep</option>
				    <option value="21">Madhya Pradesh</option>
				    <option value="22">Maharashtra</option>
				    <option value="23">Manipur</option>
				    <option value="24">Meghalaya</option>
				    <option value="25">Mizoram</option>
				    <option value="26">Nagaland</option>
				    <option value="27">Odisha</option>
				    <option value="28">Puducherry</option>
				    <option value="29">Punjab</option>
				    <option value="30">Rajasthan</option>
				    <option value="31">Sikkim</option>
				    <option value="32">Tamil Nadu</option>
				    <option value="39">Telangana</option>
				    <option value="33">Tripura</option>
				    <option value="34">Uttar Pradesh</option>
				    <option value="35">Uttarakhand</option>
				    <option value="36">West Bengal</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 <div class="form-group">
	       	<label for="marital_status" class="col-sm-3 control-label"> Marital Status </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<select name="marital_status" id="marital_status" class="form-control">
	  	   			<option disabled="disable">----- Select -----</option>
					<option value="WIDOW/ WIDOWER">Widow/ Widower</option>
				    <option value="DIVORCED">Divorced</option>
				    <option value="MARRIED">Married</option>
				    <option value="SINGLE">Single</option>
				    <option value="SEPARATED">Separated</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		<div class="form-group">
		<label for="citizenship" class="col-sm-3 control-label"> Citizenship of India by </label>
	      	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="radio" name="citizenship" id="citizenship" group="citizenship" value="birth"> Birth <br>
	  	   		<input type="radio" name="citizenship" id="citizenship" group="citizenship" value="registration/ naturalization"> Registration/ Naturalization <br>
	  	   		<input type="radio" name="citizenship" id="citizenship" group="citizenship" value="descent"> Descent <br>
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
		<label for="pan" class="col-sm-3 control-label">PAN (if available) </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="text" name="pan"  class="form-control" id="pan">
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
		<label for="voter_id" class="col-sm-3 control-label">Voter Id (if available) </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="text" name="voter_id"  class="form-control" id="voter_id">
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		 <div class="form-group">
	       	<label for="employment_type" class="col-sm-3 control-label">Employment Type  </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<select name="employment_type" id="employment_type" class="form-control">
	  	   			<option value="GOVERNMENT">Government</option>
				    <option value="PSU">PSU</option>
				    <option value="STATUTORY BODY">Statutory Body</option>
				    <option value="RETIRED GOVERNMENT SERVANT">Retired Government Servant</option>
				    <option value="PRIVATE">Private</option>
				    <option value="HOME MAKER">Homemaker</option>
				    <option value="NOT EMPLOYED">Not Employed</option>
				    <option value="STUDENT">Student</option>
				    <option value="SELF EMPLOYED">Self Employed</option>
				    <option value="RETIRED PRIVATE SERVANT">Retired - Private Service</option>
				    <option value="OWNERS PARTNERS &amp; DIRECTORS OF COMPANIES WHICH ARE MEMBERS OF CII FICCI &amp; ASSOCHAM">Owners Partners &amp; Directors Of Companies Which Are Members Of Cii Ficci &amp; Assocham</option>
				    <option value="OTHERS">Others</option>
				    <option value="RETIRED">Retired</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	     <div class="row">
		<div class="form-group">
		<label for="gov_servent" class="col-sm-3 control-label"> Is either of your parent (in case of minor)/spouse, a government servant? </label>
	      	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="radio" name="gov_servent" id="gov_servent" group="gov_servent" value="yes"> Yes
	  	   		<input type="radio" name="gov_servent" id="gov_servent" group="gov_servent" value="no"> No
	       	</div>
	    </div> 
	</div>
	<div class="row">
		 <div class="form-group">
	       	<label for="qual" class="col-sm-3 control-label"> Educational Qualification </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<select name="qual" id="qual" class="form-control">
	  	   			<option value="GRADUATE AND ABOVE">Graduate And Above</option>
				    <option value="5TH PASS OR LESS">5th Pass Or Less</option>
				    <option value="BETWEEN 6TH AND 9TH STANDARD">Between 6th And 9th Standard</option>
				    <option value="10TH PASS AND ABOVE">10th Pass And Above</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	<br>
<!-- 	 <div class="row">
		<div class="form-group">
		<label for="non_erc" class="col-sm-3 control-label"> Is applicant eligible for Non-ECR category? </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="non_erc" id="non_erc" group="non_erc" value="yes"> Yes
	  	   		<input type="radio" name="non_erc" id="non_erc" group="non_erc" value="no"> No
	       	</div>
	    </div> 
	</div>
	<br> -->
<!-- 	<div class="row">
		<div class="form-group">
		<label for="visible_distinguishing_mark" class="col-sm-3 control-label">Visible distinguishing mark</label>
	       	<div class="col-sm-5">
	  	   		<input type="date" name="visible_distinguishing_mark"  class="form-control" id="visible_distinguishing_mark">
	       	</div>
	    </div> 
	</div>
	<br> -->
	<div class="row">
		<div class="form-group">
		<label for="adhar_no" class="col-sm-3 control-label">Aadhaar Number (if available)	 </label>
	       	<div class="col-sm-6 col-md-offset-1">
	  	   		<input type="text" name="adhar_no"  class="form-control" id="adhar_no">
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-4">
	  	   		<button type="submit" class="btn btn-primary form-control" name="applicant_details">Next>></button>
	       	</div>
	    </div> 
	</div>
</form>
</div>
</div>




</div>