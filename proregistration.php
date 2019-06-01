<?php
    $con=mysqli_connect("localhost","root");
    mysqli_select_db($con,"resume_builder");
    
    if(isset($_POST['signup']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $uname=$_POST['uname'];
        $pwd = $_POST['pwd'];
        $cnt = $_POST['cnt'];
        $email = $_POST['email'];   
        $ins_query= "INSERT INTO `register` (`fname`, `lname`, `uname`, `pwd`, `cont`, `email`) VALUES ('$fname','$lname','$uname','$pwd','$cnt','$email')";
        $ins2_query=mysqli_query($con,$ins_query);
        
        $que="select id from `register` where uname='".$uname."'";
        $result=mysqli_query($con,$que);
        
        while($data=mysqli_fetch_array($result))
			{

            $que="INSERT INTO `certifications` (`id`) VALUES ('".$data[0]."')";
            $result1=mysqli_query($con,$que);
            
            $que="INSERT INTO `educational_info` (`id`) VALUES ('".$data[0]."')";
            $result1=mysqli_query($con,$que);
            
            
            $que="INSERT INTO `personal_information` (`id`) VALUES ('".$data[0]."')";
            $result1=mysqli_query($con,$que);
            
            $que="INSERT INTO `projects` (`id`) VALUES ('".$data[0]."')";
            $result1=mysqli_query($con,$que);
			
			
            $que="INSERT INTO `objective` (`id`) VALUES ('".$data[0]."')";
            $result1=mysqli_query($con,$que);
            
            $id=$data[0];
			}
    }

?>
<script>
var ck_fname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_lname = /^[A-Za-z0-9 ]{3,20}$/;
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_mobile = /^[0-9]{10}$/;
var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 

function validate(form){
var name = form.fname.value;
var name1 = form.lname.value;
 var email = form.email.value;
 var username = form.uname.value;
 var password = form.pwd.value;
 var mobile = form.cnt.value;
  
  
 var errors = [];
 
 if (!ck_fname.test(name)) {
  errors[errors.length] = "Enter Your valid Name .";
 }
 
 if (!ck_lname.test(name1)) {
  errors[errors.length] = "Enter Your valid Name .";
 }
  
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_username.test(username)) {
  errors[errors.length] = "You valid UserName no special char .";
 }

 if (!ck_password.test(password)) {
  errors[errors.length] = "You must enter a valid Password min 6 char.";
 }
 
 if(!ck_mobile.test(mobile)){
	errors[errors.length] = "You must enter a valid mobile number.";
 }
 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
</script>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
    .signupbtn{
        padding: 14px 20px;
        background-color: forestgreen;
    }    

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form style="border:1px solid #ccc;max-width:500px;margin:auto" align="center" action="" method="post" onSubmit="return validate(this);" name="form" autocomplete="off">
  <div class="container">
    <h1>REGISTER</h1>
    <p>Please fill this form to create an account.</p>
    <hr>
	
	<label for="First Name"><b>Firstname</b></label>
	<input type="text" placeholder="Enter First Name" name="fname" id="fname" ><br/>

	<label for="Last Name"><b>Lastname</b></label>
	<input type="text" placeholder="Enter Last Name" name="lname" id="lname"><br/>
		
	<label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" id="uname">

	<label for="psw"><b>Password</b></label>
    	<input type="password" placeholder="Enter Password" name="pwd" id="pwd">

    	<label for="psw-repeat"><b>Repeat Password</b></label>
    	<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat">

   	<label for="Contact"><b>Contact</b></label>
   	<input type="text" placeholder="Enter Contact no." name="cnt" id="cnt">

	<label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email">

    
        <!--<label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
 <button type="button" class="cancelbtn">Cancel</button>
-->
   
        <div class="clearfix">
       <button type="submit" class="signupbtn" name="signup"
               value="signup">Sign Up</button>
        </div>
</form>

</body>
</html>
