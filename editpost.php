<?php

$title="editpost";
require 'include/header.php';
require_once 'db/conn.php';
if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $fname=$_POST['firstName'];
    $lname=$_POST['last_name'];
    $dob=$_POST['dob'];
    $speciality=$_POST['speciality'];
    $email=$_POST['exampleInputEmail1'];
    $contact=$_POST['phone_number'];
    
$result=$crud->editAttendee($id,$fname,$lname,$dob,$speciality,$email,$contact);
if($result==true){
    include 'include/successmsg.php';
    header("Location:records.php");
}
else{
    include 'include/errorsmsg.php';
    header("Location:records.php");
}
   
}
else{
    include 'include/errorsmsg.php';
    header("Location:records.php");
    
}

?>