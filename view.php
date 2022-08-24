<?php  
$title= "view record" ;
require 'include/header.php';
require_once 'db/conn.php';

if(isset($_GET['id'])){
 
    $id= $_GET['id'];
   $result= $crud->getView($id);


}
else {
  include 'include/errorsmsg.php';
  header("Location:records.php");
}
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title "> <?php  echo "<h3>NAME:</h3>". $result['first_name'] . " " . $result['last_name']. "<hr/>";?></h5>
  
    <p class="card-text"><?php  echo "<h3> DOB:</h3>" . $result['date_of_birth'] .
                         "<hr/>"."<h3> EMAIL:</h3>". $result['email_address']. "<hr/>" . "<h3> CONTACT:</h3>". $result['contact'];
     ?></p>
   
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-info">Edit</a>
    <a onclick= "return confirm('Are you sure you want to delete?');" href="delete.php?id= <?php echo $result['attendee_id'] ?>"  class="btn btn-primary">Delete</a>
    <a href="records.php" class="btn btn-danger">Back to List</a>
  </div>
</div> 


<br>
<br>

<?php
require 'include/footer.php';
?>
