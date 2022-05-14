<?php
require_once 'RegisterModel.php';
class EditProfileModel extends RegisterModel
{
    public  $title = 'Edit Profile Page';
    
   /* public function EditProfile($ID,$Fname,$Lname, $email, $password,$address,$mobile)
    {
        $result = $this->dbh->query("update users set FirstName='$Fname',LastName='$Lname', Email='$email', Password='$password', Address='$address', Mobile='$moile' WHERE ID='$ID'");
        

        return ($result)?true:false;
    }*/
    public function deleteuser($productID)
    {
        $result = $this->dbh->query("delete from products where ID =".$_SESSION['user_id']);
        

        return ($result)?true:false;
    }

    protected $FirstName;
    protected $LastName;
    protected $Address;
    protected $Mobile;
    protected $password;
    protected $Email;
    protected $cpassword;
    /*
    public function __construct(){
        parent::__construct();
        $this->FirstName = "";
        $this->LastName = "";
        $this->Mobile = "";
        $this->Email = "";
        $this->Address = "";
    }*/

public function getFirstName($id){
    $this->dbh->query("SELECT FirstName from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->FirstName;

}

   public function setFirstName($FirstName){
       $this->FirstName=$FirstName;
   } 

   public function getLastName($id){
    $this->dbh->query("SELECT LastName from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->LastName;

}
public function setLastName($LastName){
    $this->LastName=$LastName;
} 

public function getAddr($id){
    $this->dbh->query("SELECT Address from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Address;

}
public function setAddr($Address){
    $this->Address=$Address;
} 
public function getMob($id){
    $this->dbh->query("SELECT Mobile from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Mobile;

}
public function setMob($Mobile){
    $this->Mobile=$Mobile;
} 
public function getpass($id){
    $this->dbh->query("SELECT password from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->password;

}
public function setpass($password){
    $this->password=$password;
} 

public function getEm($id){
    $this->dbh->query("SELECT Email from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Email;

}
public function setEm($Email){
    $this->Email=$Email;
} 
 
    public function EditProfile($id)
    {
        $this->dbh->query("UPDATE users SET `FirstName`= :fname , `LastName`= :lname , `password`= :pass, `Mobile`= :mob, `Address`=:addr ,`Email`=:email  WHERE `ID`=:id");
        $this->dbh->bind(':fname',$this->FirstName);
        $this->dbh->bind(':lname',$this->LastName);
        $this->dbh->bind(':pass',$this->password);
        $this->dbh->bind(':mob',$this->Mobile);
        $this->dbh->bind(':addr',$this->Address);
        $this->dbh->bind(':email',$this->Email);
        $this->dbh->bind(':id',$id);
        return $this->dbh->execute();
    


    }
}