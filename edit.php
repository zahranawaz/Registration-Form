
  <?php
  $title="Edit";
  require 'include/header.php';
  require_once 'db/conn.php';
  $results= $crud->getID();
  if(!isset($_GET['id'])){
     include 'include/errormsg.php';
     header("Location: records.php");
  } else{
    $id=$_GET['id'];
  $attendee=$crud->getView($id)
  ?>
  
  <h1 class="text-center" style="padding-top:20px;"> Editing IT Form </h1>
  <br>
  <br>
  <form method="post" action="editpost.php"  >
    <input type="hidden"  name = "id" value ="<?php echo $attendee['attendee_id'];?>" />
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="firstName" value = "<?php echo $attendee['first_name'];?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" value = "<?php echo $attendee['last_name'];?>">
  </div>
  
  <div class="form-group">
    <label for="dateofbirth">Date of Birth</label>
    <input type="text" class="form-control" id="dob"  name="dob"aria-describedby="dateHelp" value = "<?php echo $attendee['date_of_birth'];?>">
  </div>

  <div class="form-group">
    <label for="speciaity">Area of expertise</label>
    <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
    <?php    while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
      <option value = "<?php echo $r['speciality_id']; ?>"
             <?php if($r['speciality_id']==$attendee['speciality_id']) echo "selected" ;?> >
             <?php  echo $r['name']  ;    ?> 
    
    
    </option>
     


      <?php }?>
 
</select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value = "<?php echo $attendee['email_address'];?>" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phone_number">Contact Number</label>
    <input type="text" class="form-control" value = "<?php echo $attendee['contact'];?>" id="phone_number" name="phone_number" aria-describedby="phoneHelp" >
    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <div class="text-center">

  <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">Submit</button>
</div>

  
  
</form>
<?php } ?>

<?php
  require 'include/footer.php';
  ?>
