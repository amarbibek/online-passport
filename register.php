<?php 
include('header.php');
include('menubar.php');
?>

<?php
if(isset($_POST['register'])){
	$passport_office=$_POST['passport_office'];
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$login_id=$_POST['login_id'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$hint_question=$_POST['hint_question'];
	$hint_answer=$_POST['hint_answer'];

	$query="INSERT INTO `register` (`passport_office`,`name`,`lname`,`dob`,`email`,`login_id`,`password`,`hint_question`,`hint_answer`,`active`,`type`) VALUES ('$passport_office','$name','$lname','$dob','$email','$login_id','$password','$hint_question','$hint_answer','0','0')";
	$result= mysql_query($query) or die("query ddnt work!");
	if ($result){
		echo "Registered Successfully!";
	}
}
?>
<div class="container">
<div class="jumbotron">
	<form action="" method="POST">
		<div class="row">
		 	<div class="form-group">
	       		<label for="passport_office" class="col-sm-3 control-label">Passport Office &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<select name="passport_office" id="passport_office" class="form-control">
	  	   				<option disabled="disable">----- Select -----</option>
					    <option value="1">Ahmedabad</option>
					    <option value="2">Amritsar</option>
					    <option value="4">Bareilly</option>
					    <option value="5">Bengaluru</option>
					    <option value="7">Bhopal</option>
					    <option value="3">Bhubaneswar</option>
					    <option value="10">Chandigarh</option>
					    <option value="26">Chennai</option>
					    <option value="11">Cochin</option>
					    <option value="9">Coimbatore</option>
					    <option value="14">Dehradun</option>
					    <option value="15">Delhi</option>
					    <option value="18">Ghaziabad</option>
					    <option value="16">Goa</option>
					    <option value="17">Guwahati</option>
					    <option value="19">Hyderabad</option>
					    <option value="23">Jaipur</option>
					    <option value="21">Jalandhar</option>
					    <option value="22">Jammu</option>
					    <option value="8">Kolkata</option>
					    <option value="24">Kozhikode</option>
					    <option value="25">Lucknow</option>
					    <option value="27">Madurai</option>
					    <option value="28">Malappuram</option>
					    <option value="6">Mumbai</option>
					    <option value="29">Nagpur</option>
					    <option value="30">Patna</option>
					    <option value="31">Pune</option>
					    <option value="33">Raipur</option>
					    <option value="32">Ranchi</option>
					    <option value="35">Shimla</option>
					    <option value="34">Srinagar</option>
					    <option value="36">Surat</option>
					    <option value="37">Thane</option>
					    <option value="38">Tiruchirappalli</option>
					    <option value="39">Trivandrum</option>
					    <option value="40">Visakhapatnam</option>
					</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="name" class="col-sm-3 control-label">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="name"  class="form-control" id="name">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="lname" class="col-sm-3 control-label">Surname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="lname"  class="form-control" id="fname">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="dob" class="col-sm-3 control-label">Date 0f Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="date" name="dob"  class="form-control" id="dob">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="email" class="col-sm-3 control-label">Email ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="email" name="email"  class="form-control" id="email">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="login_id" class="col-sm-3 control-label">Login ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="login_id"  class="form-control" id="login_id">
	       		</div>
	       </div> 
	    </div>
	    <br>
		<div class="row">
		 	<div class="form-group">
	       		<label for="password" class="col-sm-3 control-label">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="password"  class="form-control" id="password">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="repassword" class="col-sm-3 control-label">Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="password" name="repassword"  class="form-control" id="repassword">
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="hint_question" class="col-sm-3 control-label">Hint Question &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<select name="hint_question" id="hint_question" class="form-control">
	  	   				<option disabled="disable">---Select---</option>
	  	   				<option value="birth_city">Birth City</option>
	  	   				<option value="fav_color">Favourite Color</option>
	  	   				<option value="fav_cricketer">Favourite Cricketer</option>
	  	   				<option value="fav_food">Favourite Food</option>
	  	   				<option value="fav_actor">Favourite Actor</option>
	  	   				<option value="first_school">First School Name</option>
	  	   			</select>
	       		</div>
	       </div> 
	    </div>
	    <br>
	    <div class="row">
		 	<div class="form-group">
	       		<label for="hint_answer" class="col-sm-3 control-label">Hint Answer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
	       		<div class="col-sm-5">
	  	   			<input type="text" name="hint_answer"  class="form-control" id="hint_answer">
	       		</div>
	       </div> 
	    </div>
	    <br>
	     <div class="row">
		 	<div class="form-group">
	       		<div class="col-sm-3 col-sm-offset-4">
	  	   			<button type="submit" class="btn btn-primary form-control" name="register">Register</button>
	       		</div>
	        </div> 
	    </div>
	    
	</form>
</div>
</div>