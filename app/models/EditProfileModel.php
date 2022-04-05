<?php
require_once 'RegisterModel.php';
class EditProfileModel extends RegisterModel
{
    public  $title = 'Edit Profile Page';
    
    public function EditProfile($ID,$Fname,$Lname, $email, $password,$address,$mobile)
    {
        $result = $this->dbh->query("update users set FirstName='$Fname',LastName='$Lname', Email='$email', Password='$password', Address='$address', Mobile='$moile' WHERE ID='$ID'");
        

        return ($result)?true:false;
    }
    public function deleteuser($productID)
    {
        $result = $this->dbh->query("delete from products where ID =".$_SESSION['user_id']);
        

        return ($result)?true:false;
    }
}