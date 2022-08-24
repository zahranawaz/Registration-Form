
  <?php
  $title="index";
  require 'include/header.php';
  require_once 'db/conn.php';
  $results= $crud->getID();
  ?>
  
  <h1 class="text-center" style="padding-top:20px;"> Reigstration for IT Form </h1>
  <br>
  <br>
  <form method="post" action="success.php"  >
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input  required type="text" class="form-control" id="first_name" name="firstName">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input required  type="text" class="form-control" id="last_name" name="last_name">
  </div>
  
  <div class="form-group">
    <label for="dateofbirth">Date of Birth</label>
    <input required type="text" class="form-control" id="dob"  name="dob"aria-describedby="dateHelp" >
  </div>

  <div class="form-group">
    <label for="speciaity">Area of expertise</label>
    <select class="form-select" aria-label="Default select example" id="speciality" name="speciality">
    <?php    while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
      <option value = "<?php echo $r['speciality_id']; ?>"><?php  echo $r['name']  ;    ?> </option>



      <?php }?>
 
</select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phone_number">Contact Number</label>
    <input type="text" class="form-control" id="phone_number" name="phone_number" aria-describedby="phoneHelp" >
    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <div class="text-center">

  <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</div>

  
  
</form>

<?php
  require 'include/footer.php';
  ?>
