<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="tabdemo.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
            <div id="logo"></div>
            <div id="nav">
				<ul class="navbuttons">
					<li><a href="index.html"> Logout</a></li>
				</ul>
		</div>
        </div>
		
	<div class="tab">
	  <button class="tablinks" onclick="opentab(event, 'Personal')" id="defaultOpen">Personal Information</button>
	  <button class="tablinks" onclick="opentab(event, 'Education')">Educational Information</button>
	  <button class="tablinks" onclick="opentab(event, 'Certifications')">Certifications</button>
	  <button class="tablinks" onclick="opentab(event, 'Projects')">Projects</button>
	</div>

	<div id="Personal" class="tabcontent">
	  <form method="post">
	  
                        <h2 align="center">Personal Information</h2><hr>
                        
                        
                                <label for="Full Name"><b>Full Name:</b></label><br/>
				                <input type="text" placeholder="Enter full Name" name="fname" required><br/>

								<label for="Nationality"><b>Nationality:</b></label><br/>
				                <input type="text" placeholder="Enter Nationality" name="nation" required><br/>
                       
                       
                                <label for="Date Of Birth"><b>Date Of Birth:</b></label><br/>
				                <input type="text" placeholder="YYYY-MM-DD" name="dob" required><br/>
				
                        
                                <label for="Mobile"><b>Mobile No.:</b></label><br/>
				                <input type="text" placeholder="Enter Mobile No." name="mob" required><br/>
								
								<label for="E-MAIL"><b>E-MAIL:</b></label><br/>
				                <input type="text" placeholder="Enter E-MAIL" name="email" required><br/>
				
                           
                                <label for="Address"><b>Address:</b></label><br/>
				                <textarea name="address" placeholder="Enter Address"></textarea><br/><br/>
								
								<input type="submit" value="Next" onclick="openedu()">
								
        </form>
				
	</div>

	<div id="Education" class="tabcontent">
	  <form method="post">
		<h2 align="center">Educational Information</h2><hr>
		
		<label for="Course"><b>Course:</b></label><br/>
		<input type="text" placeholder="Enter Course" name="course" required><br/>
		<label for="Institute Name"><b>Institute Name:</b></label><br/>
		<input type="text" placeholder="Enter Institute Name" name="institute" required><br/>
		<label for="Percentage"><b>CGPA/Percentage:</b></label><br/>
		<input type="text" placeholder="Enter CGPA/Percentage" name="percent" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		<label for="Course"><b>Course:</b></label><br/>
		<input type="text" placeholder="Enter Course" name="course" required><br/>
		<label for="Institute Name"><b>Institute Name:</b></label><br/>
		<input type="text" placeholder="Enter Institute Name" name="institute" required><br/>
		<label for="Percentage"><b>CGPA/Percentage:</b></label><br/>
		<input type="text" placeholder="Enter CGPA/Percentage" name="percent" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		
		<input type="submit" value="Back" onclick="openPersonal()">
		<input type="submit" value="Next" onclick="openCertifications()">
		
			
		</form> 
	</div>

	<div id="Certifications" class="tabcontent">
	  <form method="post">
		<h2 align="center">Certifications</h2><hr>
		
		<label for="Description"><b>Description:</b></label><br/>
		<input type="text" placeholder="Enter Description" name="description" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		<label for="Description"><b>Description:</b></label><br/>
		<input type="text" placeholder="Enter Description" name="description" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		
		<input type="submit" value="Back" onclick="openedu1()">
		<input type="submit" value="Next" onclick="openProjects()">
		
		</form>
	</div>
	
	<div id="Projects" class="tabcontent">
	  <form method="post">
		<h2 align="center">Projects</h2><hr>
		
		<label for="Description"><b>Description:</b></label><br/>
		<input type="text" placeholder="Enter Description" name="description" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		<label for="Description"><b>Description:</b></label><br/>
		<input type="text" placeholder="Enter Description" name="description" required><br/>
		<label for="Year"><b>Year:</b></label><br/>
		<input type="text" placeholder="Enter Year" name="year" required><br/>
		
		<input type="submit" value="Back" onclick="openCertifications1()">
		<input type="submit" value="Submit" onclick="openTemplate()">
		
		</form>
	</div>
</div>	
	<div id="footer">
			<table align="center">
				<tr>
					<th>COMPANY</th>
					<th>INSPIRATION</th>
					<th>CONTACT US</th>
					<th>E-MAIL</th>
				</tr>
				<tr>
					<td><a href="#">About Us</a></td>
					<td><a href="#">Examples</a></td>
					<td>+91-9638661228</td>
					<td>Sunny.Kanakhara25@gmail.com</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>+91-7433035595</td>
					<td>Nadib.hasan@gmail.com</td>
				</tr>
				<tr>

			</table>
			<p class="copyright">&copy; Resume Builder.com</p>
	</div>

<script>
function opentab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function openedu(){
	var x=document.getElementById("Education");
	var y=document.getElementById("Personal");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else
		x.style.display="none";
}

function openPersonal(){
	var x=document.getElementById("Education");
	var y=document.getElementById("Personal");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else{
		x.style.display="none";
		y.style.display="block";
	}
}

function openCertifications(){
	var x=document.getElementById("Education");
	var y=document.getElementById("Certifications");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else{
		x.style.display="none";
		y.style.display="block";
	}
}

function openedu1(){
	var x=document.getElementById("Education");
	var y=document.getElementById("Certifications");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else{
		y.style.display="none";
		x.style.display="block";
		
	}
}

function openProjects(){
	var x=document.getElementById("Projects");
	var y=document.getElementById("Certifications");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else{
		y.style.display="none";
		x.style.display="block";
		
	}
}

function openCertifications1(){
	var x=document.getElementById("Projects");
	var y=document.getElementById("Certifications");
	if(x.style.display=="none"){
		x.style.display="block";
		y.style.display="none";
	}
	else{
		x.style.display="none";
		y.style.display="block";
			
	}
}

function openTemplate(){
			window.location.href = "cv1.php";
}
</script>

<?php
	if(isset($_POST['Next']) || isset($_POST['submit'])){
		$Name=$_POST["fname"];
		$Nationality=$_POST["nation"];
		$DateB=$_POST["dob"];
		$Mobile=$_POST["mob"];
		$Email=$_POST["email"];
		$Address=$_POST["address"];
	} 
?>   
</body>
</html> 
