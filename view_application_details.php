<div id="all_content">
<div id="remove">
<?php 
include('header.php');
include('menubar.php');
is_login();
is_admin();
?>
</div>
<style type="text/css">
	.borderless{
		border:none !important;
		font-size: 20px;
		background-color: #333;
		color:#fff;

	}
	
</style>
<script type="text/javascript">
	function prints() {
		var all_content=document.getElementById('all_content').innerHTML;
		var content=document.getElementById('content').innerHTML;
		var remove=document.getElementById('remove').innerHTML;
		var button=document.getElementById('button').innerHTML;
		document.body.innerHTML=content;
			window.print();
			document.body.innerHTML=all_content;
	}
</script>

<div id="content">
<?php
$app_id=$_GET['app_id'];
$login_id=$_SESSION['login'];

$sql="INSERT INTO `registered_users` (`login_id`,`app_id`) VALUES('$login_id','$app_id')";
$res=mysql_query($sql) or die("ddnt");
if($res){

}else{
	echo"oops!";
}




$query="SELECT * FROM `passport_type_1` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		echo'<table class="table">';
		echo'<th class="borderless">PASSPORT TYPE</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "Applying for";
			echo "</td>";
			echo "<td>";
			echo $row['applying_for'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Application Type";
			echo "</td>";
			echo "<td>";
			echo $row['type_of_application'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Type of passport booklet";
			echo "</td>";
			echo "<td>";
			echo $row['type_of_passport_booklet'];
			echo "</td>";
			echo "</tr>";
		}
	}
}

//table two

$query="SELECT * FROM `applicant_details_2` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">APPLICANT DETAILS</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "Name";
			echo "</td>";
			echo "<td>";
			echo $row['name'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Sur name";
			echo "</td>";
			echo "<td>";
			echo $row['lname'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Gender";
			echo "</td>";
			echo "<td>";
			echo $row['gender'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "DOB";
			echo "</td>";
			echo "<td>";
			echo $row['dob'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Birth Place";
			echo "</td>";
			echo "<td>";
			echo $row['place_of_birth'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "State/UT";
			echo "</td>";
			echo "<td>";
			echo $row['state_ut'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "District";
			echo "</td>";
			echo "<td>";
			echo $row['district'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Marital Status";
			echo "</td>";
			echo "<td>";
			echo $row['marital_status'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Citizenship";
			echo "</td>";
			echo "<td>";
			echo $row['citizenship'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Pan No.";
			echo "</td>";
			echo "<td>";
			echo $row['pan'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Voter ID.";
			echo "</td>";
			echo "<td>";
			echo $row['voter_id'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Employment Tyep";
			echo "</td>";
			echo "<td>";
			echo $row['employment_type'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Government Servent";
			echo "</td>";
			echo "<td>";
			echo $row['gov_servent'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Qual";
			echo "</td>";
			echo "<td>";
			echo $row['qual'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Adhar No.";
			echo "</td>";
			echo "<td>";
			echo $row['adhar_no'];
			echo "</td>";
			echo "</tr>";
		}
	}
}

//table 3
$query="SELECT * FROM `family_details_3` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">FAMILY DETAILS</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "Father Name :";
			echo "</td>";
			echo "<td>";
			echo $row['father_name'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Mother Name :";
			echo "</td>";
			echo "<td>";
			echo $row['mother_name'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Parent Name :";
			echo "</td>";
			echo "<td>";
			echo $row['parent_name'];
			echo "</td>";
			echo "</tr>";
		}
	}
}
//table_4

$query="SELECT * FROM `present_residential_address_4` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">PRESENT RESIDENTIAL ADDRESS</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "House No. :";
			echo "</td>";
			echo "<td>";
			echo $row['house_no'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Village :";
			echo "</td>";
			echo "<td>";
			echo $row['village'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "State :";
			echo "</td>";
			echo "<td>";
			echo $row['state_ut'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "District :";
			echo "</td>";
			echo "<td>";
			echo $row['district'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Police Station :";
			echo "</td>";
			echo "<td>";
			echo $row['police_station'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "PIN :";
			echo "</td>";
			echo "<td>";
			echo $row['pin'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Mobile :";
			echo "</td>";
			echo "<td>";
			echo $row['mobile'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Email :";
			echo "</td>";
			echo "<td>";
			echo $row['email'];
			echo "</td>";
			echo "</tr>";
		}
	}
}

//table_5

$query="SELECT * FROM `permanent_address_5` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">PERMANENT ADDRESS</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "House No. :";
			echo "</td>";
			echo "<td>";
			echo $row['house_no'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Village :";
			echo "</td>";
			echo "<td>";
			echo $row['village'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "State :";
			echo "</td>";
			echo "<td>";
			echo $row['state_ut'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "District :";
			echo "</td>";
			echo "<td>";
			echo $row['district'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Police Station :";
			echo "</td>";
			echo "<td>";
			echo $row['police_station'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "PIN :";
			echo "</td>";
			echo "<td>";
			echo $row['pin'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Mobile :";
			echo "</td>";
			echo "<td>";
			echo $row['mobile'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Email :";
			echo "</td>";
			echo "<td>";
			echo $row['email'];
			echo "</td>";
			echo "</tr>";
		}
	}
}

//table_6

$query="SELECT * FROM `emergency_contact_6` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">EMERGENCY CONTACT</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "Name :";
			echo "</td>";
			echo "<td>";
			echo $row['name'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Address :";
			echo "</td>";
			echo "<td>";
			echo $row['address'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Contact  :";
			echo "</td>";
			echo "<td>";
			echo $row['contact'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Email :";
			echo "</td>";
			echo "<td>";
			echo $row['email'];
			echo "</td>";
			echo "</tr>";
			
		}
	}
}


//table_6

$query="SELECT * FROM `references_7` where `app_id`='$app_id'";
$result=mysql_query($query) or die("could not fetch data!");
if($result){
	if(mysql_num_rows($result)==1){
		//echo'<table class="table">';
		echo'<th class="borderless">REFERENCES</th>';
		echo'<th class="borderless"></th>';
		while($row=mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>";
			echo "Name :";
			echo "</td>";
			echo "<td>";
			echo $row['name'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Address :";
			echo "</td>";
			echo "<td>";
			echo $row['address'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Contact  :";
			echo "</td>";
			echo "<td>";
			echo $row['contact'];
			echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>";
			echo "Name1 :";
			echo "</td>";
			echo "<td>";
			echo $row['name1'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Address1 :";
			echo "</td>";
			echo "<td>";
			echo $row['address1'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "Contact1  :";
			echo "</td>";
			echo "<td>";
			echo $row['contact1'];
			echo "</td>";
			echo "</tr>";
			
			
		}
	}
}
echo"</table>";
?>
</div>
<div id="button">
	
	<div class="col-md-3">
		<a href="verify_documents.php?app_id=<?php echo $app_id; ?>" type="button" class="btn btn-primary form-control "  >Verify Documents</a>
	</div>
</div>



</div> 

