<?php
    session_start();
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");

if(isset($_POST['login']))
	{
		$uname=trim($_POST['uname']);
		$pwd=trim($_POST['pwd']);
	
	$query_login="select uname,pwd from `register` where uname ='$uname' and pwd='$pwd'";
	
	$exe_login=mysqli_query($con,$query_login);
	
	$num_login=mysqli_num_rows($exe_login);
	
	if($num_login==1)
	{
		$_SESSION['log']=$uname;
		?>
		<script>
			alert('Login successful');
			window.location="proinnerpage.php";
		</script>
        <?php
	}
	else
	{
		?>
        <script>
			window.onload=function()
			{
				alert('Username or Password incorrect');
				window.location="prologin.php";
			}
		</script>
        <?php
	}
	}
		
?>


<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 2px solid black;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.container {
  padding: 16px;
}

span.pwd {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.pwd {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 align="center">SIGN IN</h2>

<form action="" method="post" style="max-width:500px;margin:auto" align="center">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="pwd"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pwd" required>

        <button type="submit" value="login" name="login">Login</button>
    </div>

      <div class="container" style="background-color:#f1f1f1">
          <span class="psw"><a href="#">Forgot your Password?</a></span>
      </div>
</form>

</body>
</html>
