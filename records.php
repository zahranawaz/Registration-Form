<?php
$title= "records";
require_once 'include/header.php';
require_once 'db/conn.php'; 
$results= $crud->getAttendees();

?>

<br>
<br>

<table class="table">

<tr>
     <th>id </th>
     <th> First Name</th>
     <th> last Name</th>
    
     <th> Area of Expertise</th>
     <th> Action</th>
    
    
</tr>

    <?php
    while($r=$results->fetch(PDO::FETCH_ASSOC)){  // $r takes the values from the db so the variables must be same named?>
   <tr>   <td> <?php  echo $r['attendee_id']?></td>
     <td><?php echo $r['first_name'] ?></td>
     <td><?php echo $r['last_name'] ?></td>
    
     <td><?php  echo $r['name'] ?></td>
     <td><a href="view.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-primary">View</a>
     <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-warning">Edit</a>
     <a onclick="return confirm ('are you sure you want to delete this record?') ;" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-danger">Delete</a>
    </td>

     </tr>
         
          
     <?php 
   
 } ?>

    
    
    
    
    
    
    
    


















</table>


















<br>
<br>
<br>
<?php  include 'include/footer.php'; ?>




