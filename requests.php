<?php
//session_start(); 
include('header.php');
include('menubar.php');
is_login();
is_admin();
?>
<?php
$query="SELECT * FROM `paid_users`";
$result=mysql_query($query) or die("oops!");
if($result){
	if(mysql_num_rows($result)>=1){
		while ($row=mysql_fetch_array($result)) {
			echo $app_id= $row['app_id'];
			?>
			<a href="view_application_details.php?app_id=<?php echo $app_id; ?>"   >View applicant Details</a>
			
			<br/>
			<?php
		}
	}
}

?>