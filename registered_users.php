<?php
include('header.php');
include('menubar.php');
is_login();
?>
<?php
$user_id=$_SESSION['login'];
$query="SELECT * FROM `registered_users` WHERE `login_id`='$user_id'";
$result=mysql_query($query);
if($result){
	if(mysql_num_rows($result)>=1){
		while ($row=mysql_fetch_array($result)) {
			$app_id=$row['app_id'];
			// echo'<input type="radio" name="app_id" value="';  echo $app_id ; echo '">';
			echo $row['app_id'];
			
			echo'<a href="make_payment.php?app_id=';echo $app_id;echo'">Make Payment</a>';
			echo"<br/>";
		}
	}
}