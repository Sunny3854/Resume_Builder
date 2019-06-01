<html>

<head>
    <title>CV</title>
</head>

<body>
    <table align="center" border="1" width="800">
        <tr>
            <td>

                <?php
                session_start();
                                
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");
    
   
    $sgpid=$_SESSION["gpid"];
    $rs = mysqli_query($con,"SELECT * FROM `personal_information` WHERE `pid` = $sgpid ") or die ("faild query ".mysqli_error($con));
    
    $as = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    ?>
                <table border="0" bgcolor="lightgrey" width="800">
                    <tr>
                        <td colspan="2" rowspan="2" align="left" width="70%">
                            <h1>
                                <?php echo $as["fullname"]; ?>
                            </h1>
                        </td>
                        <td align="left">
                            <?php echo $as["address"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Date Of Birth:
                            <?php echo $as["dob"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" align="left" width="30%">Nationality:
                            <?php echo $as["nationality"]; ?>
                        </td>
                        <td align="left">Contact No:
                            <?php echo $as["mobno"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">E-mail:
                            <?php echo $as["email"]; ?>
                        </td>
                    </tr>
                </table>

	
					 <?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");
    
   
    $sgoid=$_SESSION["goid"];
    $rs = mysqli_query($con,"SELECT * FROM `objective` WHERE `oid` = $sgoid ") or die ("faild query ".mysqli_error($con));
    
    $as = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    ?>
                <table align="center" border="0">
                    <tr>
                        <td align="left" colspan="2"><b>Objective</b>
                            <h1></h1>
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="3"><h1></h1> <?php echo $as["objec"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="2"><b>EDUCATIONAL INFORMATION</b>
                        </td>
                        <td>
                            <?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");
    
   
    $sgeid=$_SESSION["geid"];
    $rs = mysqli_query($con,"SELECT * FROM `educational_info` WHERE `eid` = $sgeid ") or die ("faild query ".mysqli_error($con));
    
    $as = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    ?>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Course name:<?php echo $as["crsename"]; ?> </td>
                        
                        <td>Year: <?php echo $as["year"]; ?></td>
                        
                        <td>CGPA: <?php echo $as["cgpa"]; ?></td>
                        <td> University: <?php echo $as["instiname"]; ?></td>
                    </tr>
                   
                    <tr>
                        <td>Course name:<?php echo $as["crsename2"]; ?></td>
                        
                        <td>Year: <?php echo $as["year2"]; ?></td>
                       
                         <td>CGPA: <?php echo $as["cgpa2"]; ?></td>
                         
                         <td>University: <?php echo $as["instiname2"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>CERTIFICATIONS</b></td>
                         <?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");
    
   
    $sgcid=$_SESSION["gcid"];
    $rs = mysqli_query($con,"SELECT * FROM `certification` WHERE `cid` = $sgcid") or die ("faild query ".mysqli_error($con));
    
    $as = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    ?>
                        
                    </tr>
                    <tr>
                        <td>Description: <?php echo $as["descrip"]; ?></td>
                        
                        <td>Year: <?php echo $as["year"]; ?></td>
                        
                        <td>Description: <?php echo $as["descrip2"]; ?></td>
                        
                        <td>Year: <?php echo $as["year2"]; ?></td>
                        
                    </tr>
                    <tr>
                        <td align="left" colspan="2"><b>PROJECTS</b></td>
                        
                        <?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"resume_builder");
    
   
    $sgproid=$_SESSION["gproid"];
    $rs = mysqli_query($con,"SELECT * FROM `projects` WHERE `proid` = $sgproid") or die ("faild query ".mysqli_error($con));
    
    $as = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    ?>
                        
                    </tr>
                    
                    <tr>
                        <td>Description: <?php echo $as["descrip"]; ?></td>
                        
                        <td>Year: <?php echo $as["year"]; ?></td>
    
                        <td><td>Description: <?php echo $as["descrip2"]; ?></td>
                        </td>
                        
                       <td>Year: <?php echo $as["year2"]; ?></td>
                        
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
