<?php
require_once 'shopModel.php';
class edit_delete_productModel extends shopModel
{
    public  $title = 'Edit and Delete Products Page';
    
    public function editProducts($ID,$Fname,$Lname, $email, $password,$address,$mobile)
    {
        $result = $this->dbh->query("update users set FirstName='$Fname',LastName='$Lname', Email='$email', Password='$password', Address='$address', Mobile='$moile' WHERE ID='$ID'");
        

        return ($result)?true:false;
    }
    public function deleteProducts($productID)
    {
        $result = $this->dbh->query("delete from products where ID ='$productID'");
        

        return ($result)?true:false;
    }
}
