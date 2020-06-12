<?php 
include('header.php');
include('menubar.php'); 
//include('sidebar.php');
//sidebar(); 
is_login();
?>
<?php 
if(isset($_POST['next'])){
	$MIN_SESSION_ID = 1000000000;
	$MAX_SESSION_ID = 9999999999;
	$app_id = mt_rand($MIN_SESSION_ID, $MAX_SESSION_ID);
	$_SESSION['app_id']=$app_id;




	$applying_for=$_POST['applying_for'];
	$type_of_application=$_POST['type_of_application'];
	$type_of_passport_booklet=$_POST['type_of_passport_booklet'];
	$query="INSERT INTO `passport_type_1` (`applying_for`,`type_of_application`,`type_of_passport_booklet`,`app_id`) VALUES ('$applying_for','$type_of_application','$type_of_passport_booklet','$app_id')";
	$result=mysql_query($query) or die("ddnt work buddy");
	if($result){
		header('location:applicant_details.php');
	}
}

 ?>
<div class="container">
<h2>Passport Type</h2>

<strong>Please read the Passport Instruction Booklet carefully before filling the application form. Furnishing of incorrect information/suppression of information would lead to rejection of application and would attract penal provisions as prescribed under the Passports Act, 1967. Please produce your original documents at the time of submission of the form.</strong>
<div class="jumbotron">
<form action="" method="POST">
	<div class="row">
		<div class="form-group">
		<label for="applying_for" class="col-sm-3 control-label">Applying for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="applying_for" id="applying_for" group="applying_for" value="fresh_passport"> Fresh Passport
	  	   		<input type="radio" name="applying_for" id="applying_for" group="applying_for" value="reissue_of_passport"> Re-issue of Passport
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
		<label for="type_of_application" class="col-sm-3 control-label">Type of Application &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="type_of_application" id="type_of_application" group="type_of_application" value="normal"> Normal
	  	   		<input type="radio" name="type_of_application" id="type_of_application" group="type_of_application" value="tatkal"> Tatkal
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
		<label for="type_of_passport_booklet" class="col-sm-3 control-label">Type of Passport Booklet &nbsp;&nbsp;&nbsp;&nbsp;: </label>
	      	<div class="col-sm-5">
	  	   		<input type="radio" name="type_of_passport_booklet" id="type_of_passport_booklet" group="type_of_passport_booklet" value="36pages"> 36 Pages
	  	   		<input type="radio" name="type_of_passport_booklet" id="type_of_passport_booklet" group="type_of_passport_booklet" value="60pages"> 60 Pagees
	       	</div>
	    </div> 
	</div>
	<br>
	<div class="row">
		<div class="form-group">
	        <div class="col-sm-3 col-sm-offset-1">
	  	   		<button type="submit" class="btn btn-primary form-control" name="next">Next>></button>
	       	</div>
	    </div> 
	</div>
</form>
</div>
<strong>Note:</strong>	While applying under Fresh Issuance category - please make sure you never held a Passport of the applied category (i.e. Ordinary Passport, Diplomatic Passport or Official Passport) in the past.<br><br>
</div>