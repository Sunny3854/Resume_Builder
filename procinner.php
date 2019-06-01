<?php

    session_start();
    $con=mysqli_connect("localhost","root");
    mysqli_select_db($con,"resume_builder");
    
    if(isset($_POST['submit'])){
        
		$name=$_POST['fname'];
		$nation=$_POST['nation'];
		$dob=$_POST['dob'];
		$mob=$_POST['mob'];
		$email=$_POST['email'];
		$address=$_POST['address']; 
        
        $course=$_POST['course'];
		$institute=$_POST['institute'];
		$percent=$_POST['percent'];
		$year=$_POST['year'];
        $course2=$_POST['course2'];
		$institute2=$_POST['institute2'];
		$percent2=$_POST['percent2'];
		$year2=$_POST['year2'];
        
        $cerdescrip=$_POST['cerdescrip'];
        $ceryear=$_POST['ceryear'];
        $cerdescrip2=$_POST['cerdescrip2'];
        $ceryear2=$_POST['ceryear2'];
        
        $projdescrip=$_POST['projdescrip'];
        $projyear=$_POST['projyear'];
        $projdescrip2=$_POST['projdescrip2'];
        $projyear2=$_POST['projyear2'];
		
		$objectdescrip=$_POST['objectdescrip'];
    
        $pid="select id from register where email='$email'";
        $que=mysqli_query($con,$pid);
        $data=mysqli_fetch_array($que);
        $pid=$data['id'];
        
        $eid="select id from register where email='$email'";
        $que=mysqli_query($con,$eid);
        $data=mysqli_fetch_array($que);
        $eid=$data[0];
        
        $cid="select id from register where email='$email'";
        $que=mysqli_query($con,$cid);
        $data=mysqli_fetch_array($que);
        $cid=$data[0];
        
        $proid="select id from register where email='$email'";
        $que=mysqli_query($con,$proid);
        $data=mysqli_fetch_array($que);
        $proid=$data[0];
		
		$oid="select id from register where email='$email'";
		$que=mysqli_query($con,$oid);
		$data=mysqli_fetch_array($que);
		$oid=$data[0];
        
        $_SESSION["gpid"]=$pid;
        $_SESSION["geid"]=$eid;
        $_SESSION["gcid"]=$cid;
        $_SESSION["gproid"]=$proid;
		$_SESSION["goid"]=$oid;

        
        
       $ins_query="INSERT INTO `personal_information` (`pid`,`fullname`, `nationality`, `dob`, `mobno`, `email`, `address`) VALUES ('$pid','$name', '$nation', '$dob', '$mob', '$email', '$address')";
       $ins2_query=mysqli_query($con,$ins_query);
       
        $ins_query2="INSERT INTO `educational_info` (`eid`,`year`, `crsename`, `instiname`, `cgpa`, `year2`, `crsename2`, `instiname2`, `cgpa2`) VALUES ('$eid','$year', '$course', '$institute', '$percent', '$year2', '$course2', '$institute2', '$percent2')";
        $ins3_query=mysqli_query($con,$ins_query2);
       
        
        $ins_query3="INSERT INTO `certification` (`cid`,`descrip`, `year`, `descrip2`, `year2`) VALUES ('$cid','$cerdescrip', '$ceryear', '$cerdescrip2', '$ceryear2')";
        $ins4_query=mysqli_query($con,$ins_query3)or die ("faild query ".mysqli_error($con));
       
        $ins_query4="INSERT INTO `projects` (`proid`,`descrip`, `year`, `descrip2`, `year2`) VALUES ('$proid','$projdescrip', '$projyear', '$projdescrip2', '$projyear2')";
        $ins5_query=mysqli_query($con,$ins_query4);
		
		$ins_query5="INSERT INTO `objective` (`oid`,`objec`) VALUES ('$oid','$objectdescrip')";
		$ins6_query=mysqli_query($con,$ins_query5);
      
        /*  $que="select id from `register` where email='".$email."'";
        $result=mysqli_query($con,$que);
        $data=mysqli_fetch_array($result);
        $id=$data[0];
       
        $que="UPDATE `personal_information` SET `fullname`='$name',`nationality`='$nation',`dob`='$dob',`mobno`='$mob',`email`='$email',`address`='$address' WHERE `id`='$id'";
        $quef=mysqli_query($con,$que);
        
        $que="UPDATE `educational_info` SET `year`='$year',`crsename`='$course',`instiname`='$institute',`cgpa`='$percent',`year2`='$year2',`crsename2`='$course2',`instiname2`='$institute2',`cgpa2`='$percent2' WHERE `id`='$id'";
        $quef=mysqli_query($con,$que);
        
        $que="UPDATE `certifications` SET `descrip`='$cerdescrip',`year`='$ceryear',`descrip2`='$cerdescrip2',`year2`='$ceryear2' WHERE `id`='$id'";
        $quef=mysqli_query($con,$que);

        $que="UPDATE `projects` SET `descrip`='$projdescrip',`year`='$projyear',`descrip2`='$projdescrip2',`year2`='$projyear2' WHERE `id`='$id'";
        $quef=mysqli_query($con,$que);*/
        
        header("Location:cv1.php");
    }
?>
