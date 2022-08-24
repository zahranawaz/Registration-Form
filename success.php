<?php
$title="success";
require 'include/header.php';
require_once 'db/conn.php';
if(isset($_POST['submit'])){
    $fname=$_POST['firstName'];
    $lname=$_POST['last_name'];
    $dob=$_POST['dob'];
    $speciality=$_POST['speciality'];
    $email=$_POST['exampleInputEmail1'];
    $contact=$_POST['phone_number'];
    
   
   $issuccess= $crud->insert($fname,$lname,$dob,$speciality,$email,$contact);



if($issuccess){
  include 'include/successmsg.php';
  header("Location:records.php");
}


}
else{
  include 'include/errorsmsg.php';
  header("Location:records.php");
}
?>
<!--  Action page using the get method
<h1 class="text-center text-success"> Congrratulations! Registration successful!</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title "> <?php // echo "<h3>NAME:</h3>". $_GET['firstName'] . " " . $_GET['last_name']. "<hr/>";?></h5>
  
    <p class="card-text"><?php  //echo "<h3> DOB:</h3>" . $_GET['dob'] .
                        // "<hr/>"."<h3> EMAIL:</h3>". $_GET['exampleInputEmail1']. "<hr/>" . "<h3> CONTACT:</h3>". $_GET['phone_number'];
     ?></p>
   
    <a href="success.php" class="card-link">Filled Form</a>
    <a href="index.php" class="card-link">Registration Link</a>
  </div>
</div> 
-->
<!-- action page using the post method -->

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title "> <?php  echo "<h3>NAME:</h3>". $_POST['firstName'] . " " . $_POST['last_name']. "<hr/>";?></h5>
  
    <p class="card-text"><?php  echo "<h3> DOB:</h3>" . $_POST['dob'] .
                         "<hr/>"."<h3> EMAIL:</h3>". $_POST['exampleInputEmail1']. "<hr/>" . "<h3> CONTACT:</h3>". $_POST['phone_number'];
     ?></p>
   
    <a href="success.php" class="card-link">Filled Form</a>
    <a href="index.php" class="card-link">Registration Link</a>
  </div>
</div> 

<?php
$title="success";
require 'include/footer.php';
?>
