<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="innerpage.css" />
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
                    <li><a href="index.php"> Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="tab">
            <button class="tablinks" onclick="opentab(event, 'Personal')" id="defaultOpen">Personal Information</button>
            <button class="tablinks" onclick="opentab(event, 'Education')">Educational Information</button>
            <button class="tablinks" onclick="opentab(event, 'Certifications')">Certifications</button>
            <button class="tablinks" onclick="opentab(event, 'Projects')">Projects</button>
			<button class="tablinks" onclick="opentab(event, 'Objective')">Objective</button>
        </div>

        <div id="Personal" class="tabcontent">
            <form method="post" action="procinner.php">
			
                <h2 align="center">Personal Information</h2>
                <hr>


                <label for="Full Name"><b>Full Name:</b></label><br />
                <input type="text" placeholder="Enter full Name" name="fname" required><br />

                <label for="Nationality"><b>Nationality:</b></label><br />
                <input type="text" placeholder="Enter Nationality" name="nation" required><br />


                <label for="Date Of Birth"><b>Date Of Birth:</b></label><br />
                <input type="text" placeholder="YYYY-MM-DD" name="dob" required><br />


                <label for="Mobile"><b>Mobile No.:</b></label><br />
                <input type="text" placeholder="Enter Mobile No." name="mob" required><br />

                <label for="E-MAIL"><b>E-MAIL:</b></label><br />
                <input type="text" placeholder="Enter E-MAIL" name="email" required><br />


                <label for="Address"><b>Address:</b></label><br />
                <textarea name="address" placeholder="Enter Address"></textarea><br /><br />

                <input type="button" value="Next" onclick="opentab(event,'Education')">


        </div>

        <div id="Education" class="tabcontent">

            <h2 align="center">Educational Information</h2>
            <hr>

            <label for="Course"><b>Course:</b></label><br />
            <input type="text" placeholder="Enter Course" name="course" required><br />
            <label for="Institute Name"><b>Institute Name:</b></label><br />
            <input type="text" placeholder="Enter Institute Name" name="institute" required><br />
            <label for="Percentage"><b>CGPA/Percentage:</b></label><br />
            <input type="text" placeholder="Enter CGPA/Percentage" name="percent" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="year" required><br />
            <label for="Course"><b>Course:</b></label><br />
            <input type="text" placeholder="Enter Course" name="course2" required><br />
            <label for="Institute Name"><b>Institute Name:</b></label><br />
            <input type="text" placeholder="Enter Institute Name" name="institute2" required><br />
            <label for="Percentage"><b>CGPA/Percentage:</b></label><br />
            <input type="text" placeholder="Enter CGPA/Percentage" name="percent2" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="year2" required><br />

            <input type="button" value="Back" onclick="opentab(event,'Personal')">
            <input type="button" value="Next" onclick="opentab(event,'Certifications')">


        </div>

        <div id="Certifications" class="tabcontent">

            <h2 align="center">Certifications</h2>
            <hr>

            <label for="Description"><b>Description:</b></label><br />
            <input type="text" placeholder="Enter Description" name="cerdescrip" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="ceryear" required><br />
            <label for="Description"><b>Description:</b></label><br />
            <input type="text" placeholder="Enter Description" name="cerdescrip2" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="ceryear2" required><br />

            <input type="button" value="Back" onclick="opentab(event,'Education')">
            <input type="button" value="Next" onclick="opentab(event,'Projects')">


        </div>

        <div id="Projects" class="tabcontent">

            <h2 align="center">Projects</h2>
            <hr>

            <label for="Description"><b>Description:</b></label><br />
            <input type="text" placeholder="Enter Description" name="projdescrip" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="projyear" required><br />
            <label for="Description"><b>Description:</b></label><br />
            <input type="text" placeholder="Enter Description" name="projdescrip2" required><br />
            <label for="Year"><b>Year:</b></label><br />
            <input type="text" placeholder="Enter Year" name="projyear2" required><br />

            <input type="button" value="Back" onclick="opentab(event,'Certifications')">
            <input type="button" value="Next" onclick="opentab(event,'Objective')">
            
           
            
        <!--  <input type="button" value="Get Resume" onclick="openTemplate()"> -->

            
        </div>
		
		<div id="Objective" class="tabcontent">
	  
		<h2 align="center">Objective</h2><hr>
		
		<label for="Description"><b>Objective:</b></label><br/>
		<input type="text" placeholder="Enter Objective" name="objectdescrip" required><br/>
		
		<input type="button" value="Back" onclick="opentab(event,'Projects')">
        <button type="submit" value="submit" name="submit">Submit</button>
		
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
    </script>

</body>

</html>
