<?php
//session_start();
include('header.php');
include('menubar.php');
is_login();
?>


<style type="text/css">
	.borderless{
		border:none !important;
		font-size: 20px;
		background-color: #333;
		color:#fff;
	}
	.payment-options,.card-payment{
		width: 100%;
		background-color: #000;
		color:#999;
		padding:10px 10px;
		padding-left: 550px;
	}
	.make-payment{
		width: 100%;
		//background-color: #000;
		color:#999;
		padding:10px 10px;
		padding-left: 500px;
	}
	.errors{
		position: absolute;
		left: 850px;
		top: 662px;
		//background-color: red;
	}
	.errors label{
		color: red;
	} 
	.errors_number{
		position: absolute;
		left: 850px;
		top: 715px;
		//background-color: red;
	}
	.errors_number label{
		color: red;
	} 
</style>

<div class="min-height">

<div class="container-fluid">
	<label class="make-payment">Please make payment of : Rs. 5000/-</label>
</div>


<div class="container-fluid">
	<label class="payment-options">Payment Options!!!</label>
</div><br>
<div class="container">
	<div id="row">
		<div class="col-md-2">
			<a href="https://www.paypal.com/in/home" target="_blank"><img src="images/paypl.jpg" class="img-thumbnail" height="400px" ></a>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<a href="https://paytm.com/" target="_blank"><img src="images/paytm.jpg" class="img-thumbnail" height="350px" ></a>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<a href="https://www.americanexpress.com/in/" target="_blank"><img src="images/american.png" class="img-thumbnail" height="400px" ></a>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<a href="https://www.sbi.co.in/" target="_blank"><img src="images/sbi.jpg" class="img-thumbnail" height="400px" ></a>
		</div>

		
	</div>
</div><br><br>
<div class="container-fluid">
	<label class="card-payment">Pay by your card!!!</label>
</div>
<br><br><br>

<div>
	<div class="container">
<div class="jumbotron">
	<form action="" method="post">
		<div class="row">
		 	<div class="form-group">
	       		<label for="name" class="col-sm-3 control-label">Name on card &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="name"  class="form-control" id="name">
	       		</div>
	       </div> 
	    </div><br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="number" class="col-sm-3 control-label">Card Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="number" name="number"  class="form-control" id="number">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="date" class="col-sm-3 control-label">Expiry Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="date" name="expiry_date"  class="form-control" id="date">
	       		</div>
	       </div> 
	    </div><br>
    	<div class="row">
       		<div class="form-group">
       			<label for="cvv" class="col-sm-3 control-label">CVV &nbsp;&nbsp;&nbsp;: </label>
       			<div class="col-sm-5">
  	   				<input type="number" name="cvv"  class="form-control" id="cvv"><br>
       			</div>
       		</div> 
       </div><br>
		<div class="row">
		    <div class="form-group">
		       	<div class="col-sm-3 col-sm-offset-4">
		  	   		<button type="submit" class="btn btn-primary form-control " name="make_payment">Make Payment</button>
		       	</div>
		    </div> 
		</div>
	</form>
</div>
</div>
</div>



 <?php 
 if(isset($_POST['make_payment'])){
 	$name=$_POST['name'];
 	$number=$_POST['number'];
 	$expiry_date=$_POST['expiry_date'];
	$cvv=$_POST['cvv'];
	// code for validation
	if(ctype_alpha($name)==true){
	//and after validation we can make payment
		if(strlen($number)==16){
 		// code to put user in registered user table

	$user_id=$_SESSION['login'];
	$app_id=$_SESSION['app_id'];
	$query="INSERT INTO `paid_users` (`user_id`,`app_id`) VALUES ('$user_id','$app_id')";
	$result=mysql_query($query) or die("ddnt wrk");
	if($result){
	echo '<div class="alert alert-info" role="alert"><h4>You have made the payment of Rs. 5000/- Successfully. </h4></div>';
	}
	}else{
		echo'<div class="errors_number">';
	echo"<label> * Enter valid 16 digit card number!</label>";
	echo"</div>";
	}
	}else{
	echo'<div class="errors">';
	echo"<label> * Name should contain only alphabets</label>";
	echo"</div>";
}
 	
 }
 
  ?> 

</div>
<?php include('footer.php');?>