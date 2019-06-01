<?php
    $fnameError ="";
    $lnameError ="";
    $unameError ="";
    $pwdError ="";
    $cntError ="";
    $emailError ="";

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
    
if(isset($_POST['signup'])){

    if (empty($_POST["fname"])) {
        $fnameError = "Name is required";
    } 
    else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$fname))
        {
            $fnameError = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["lname"])) {
        $lnameError = "Name is required";
    } 
    else {
        $lname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$lname))
        {
            $lnameError = "Only letters and white space allowed";
        }
    }
    
    if(empty($_POST["uname"])){
        $unameError="User name is required";
    }
    else{
        $uname=test_input($_POST["uname"]);
        if(!preg_match("/^[-a-z0-9+&@#/%?=~_|!:,.;]*[-a-z0-9+&@#/%=~_|]",$uname)){
            $unameError="invalid username";
        }
    }
    
    if(empty($_POST["cnt"])){
        $cntError="contact is required";
    }
    else{
        $cnt=test_input($_POST["cnt"]);
        if(!preg_match("/^[0-9",$cnt)){
            $cntError="invalid contact";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } 
    else {
        $email = test_input($_POST["email"]);
        if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
            $emailError = "Invalid email format";
        }
    }
}
?>

