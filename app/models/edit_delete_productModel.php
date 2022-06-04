<?php
require_once 'shopModel.php';
class edit_delete_productModel extends shopModel
{
    public  $title = 'Edit and Delete Products Page';
    protected $ProductName;
    protected $Description;
    protected $Quantity;
    protected $Price;
    protected $Cat_ID;
    protected $id;
    protected $Aboutt;
    protected $Pconditionn;
    protected $ProductImagee;
    protected $Product_Imagee2;
    protected $Product_Imagee3;
    protected $datee;


public function getPName($id){
    $this->dbh->query("SELECT ProductName from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->ProductName;

}
   public function setPName($ProductName){
       $this->ProductName=$ProductName;
   } 
   public function getPAbout($id){
    $this->dbh->query("SELECT About from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->About;

}
   public function setPAbout($Aboutt){
       $this->Aboutt=$Aboutt;
   } 
   
   public function getPconditionn($id){
    $this->dbh->query("SELECT PCondition from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->PCondition;

}
   public function setPconditionn($Pconditionn){
       $this->Pconditionn=$Pconditionn;
   } 
   public function getProductDesc($id){
    $this->dbh->query("SELECT Description from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Description;

}
public function setProductDesc($Description){
    $this->Description=$Description;
} 

public function getProductQuantity($id){
    $this->dbh->query("SELECT Quantity from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Quantity;

}
public function setProductQuantity($Quantity){
    $this->Quantity=$Quantity;
} 
public function getProductCatID($id){
    $this->dbh->query("SELECT Cat_ID from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Cat_ID;

}
public function setProductCatID($Cat_ID){
    $this->Cat_ID=$Cat_ID;
} 
public function getProductPrice($id){
    $this->dbh->query("SELECT Price from products where `ProductID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Price;

}
public function setProductPrice($Price){
    $this->Price=$Price;
} 


    public function editProducts($id)
    {
        $this->dbh->query("UPDATE products SET `ProductName`= :pname , `Quantity`= :pquantity , `Description`= :pdesc , `Price`= :pprice ,`About` = :ab , `PCondition` = :cond WHERE `ProductID`=:id");
        $this->dbh->bind(':pname',$this->ProductName);
        $this->dbh->bind(':pdesc',$this->Description);
        $this->dbh->bind(':ab',$this->Aboutt);
        $this->dbh->bind(':cond',$this->Pconditionn);
        $this->dbh->bind(':pquantity',$this->Quantity);
        $this->dbh->bind(':pprice',$this->Price);
        $this->dbh->bind(':id',$id);
        return $this->dbh->execute();

    }
    
    public function deleteProduct($ID)
    {
        $this->dbh->query("DELETE FROM products (`productImage`,`product_Image2`,`product_Image3`,`ProductName`, `Description`, `Quantity`,`Price`,`About`,`PCondition`,`Date`) VALUES(:prod_img1 , :prod_img2 , :prod_img3 , :pname, :pdesc, :pquantity, :pprice ,:ab,:cond,:datee) Where `ProductID`=:id");
        $this->dbh->bind(':pname',$this->ProductName);
        $this->dbh->bind(':pdesc',$this->Description);
        $this->dbh->bind(':ab',$this->Aboutt);
        $this->dbh->bind(':cond',$this->Pconditionn);
        $this->dbh->bind(':pquantity',$this->Quantity);
        $this->dbh->bind(':pprice',$this->Price);
        $this->dbh->bind(':pimg1',$this->ProductImagee);
        $this->dbh->bind(':pimg2',$this->Product_Imagee2);
        $this->dbh->bind(':pimg3',$this->Product_Imagee3);
        $this->dbh->bind(':datee',$this->datee);

        $this->dbh->bind(':id',$ID);
        return $this->dbh->execute();
    }
}
