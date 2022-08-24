<?php
$title= "delete";
require_once 'include/header.php';
require_once 'db/conn.php'; 

   
    if(!isset($_GET['id'])){
        include 'include/errormsg.php';
        header("Location:records.php");

    }
    else{
          $id= $_GET['id'];
          $result= $crud->delete($id);

     if($result){
        include 'include/successmsg.php';
        header("Location:records.php");
     }
     else{
        echo "error";
        include 'include/errormsg.php';
        header("Location: records.php");
     }








    }


?>
<br>
<?php  require_once 'include/footer.php';?>