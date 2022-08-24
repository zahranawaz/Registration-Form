<?php 
class crud { 

private $db;
function __construct($conn)
{
    $this->db=$conn;
}

public function insert($fname,$lname,$dob,$speciality,$email,$contact){

    try {

        $sql="INSERT INTO attendee (first_name, last_name, date_of_birth,contact,email_address,speciality_id) VALUES (:first_name, :last_name, :date_of_birth,:contact, :email_address,:speciality_id) ";
        $stmt= $this->db->prepare($sql);
        $stmt->bindparam(":first_name", $fname);
        $stmt->bindparam(":last_name", $lname);
        $stmt->bindparam(":date_of_birth",$dob);
        $stmt->bindparam(":speciality_id",$speciality);
        $stmt->bindparam(":email_address",$email);
        $stmt->bindparam(":contact",$contact);
    
       
       
        $stmt->execute();
        return true;


    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;



    }





}

public function editAttendee($id,$fname,$lname,$dob,$speciality,$email,$contact){
    try {
    $sql= " UPDATE `attendee` SET `first_name`= :fname,`last_name`=:lname,`date_of_birth`=:dob,
    `contact`=:contact,`email_address`=:email,`speciality_id`=:speciality WHERE attendee_id=:id ";
  

   
    $stmt= $this->db->prepare($sql);
    $stmt->bindparam(":id", $id);
    $stmt->bindparam(":fname", $fname);
    $stmt->bindparam(":lname", $lname);
    $stmt->bindparam(":dob",$dob);
    $stmt->bindparam(":speciality",$speciality);
    $stmt->bindparam(":email",$email);
    $stmt->bindparam(":contact",$contact);

   

   
   
    $stmt->execute();
    return true;


} catch (PDOException $e) {
    echo $e->getMessage();
    return false;



}


  





}

public function getAttendees(){
    try{
 
    $sql= "SELECT * FROM `attendee` a INNER JOIN  specialities s ON a.speciality_id = s.speciality_id ";
    $result= $this->db->query($sql);
    return $result;
    }
    catch(PDOException $e){
      echo $e->getMessage();
      return false;


    }



}



public function getId(){
    try{
$sql= "SELECT * FROM `specialities`";
$result=$this->db->query($sql);
return $result;
    }
    catch(PDOException $e){

      echo $e->getMessage();
      return false;


    }


}

public function getView($id){
    try{

 $sql= " SELECT * FROM `attendee` a INNER JOIN  specialities s ON a.speciality_id = s.speciality_id WHERE attendee_id = :id ";
 $stmt= $this->db->prepare($sql);
 $stmt->bindparam(':id', $id);
 
   $stmt->execute();
 $result= $stmt->fetch();
 return $result;
    }
    catch(PDOException $e){
      echo $e->getMessage();
      return false;

    }



}

public function delete($id){
  try{
    $sql= "DELETE FROM `attendee` WHERE attendee_id=:id";
    $stmt=$this->db->prepare($sql);
    $stmt->bindparam(":id",$id);
    $stmt->execute();
    return true;
  }
  catch (PDOException $e) {
    echo $e->getMessage();
    return false;




}



}
}















?>