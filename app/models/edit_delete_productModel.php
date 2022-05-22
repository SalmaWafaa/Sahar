<?php
require_once 'shopModel.php';
class edit_delete_productModel extends shopModel
{
    public  $title = 'Edit and Delete Products Page';
    protected $ProductName;
    protected $Description;
    protected $Quantity;
    protected $Price;
    protected $productImage1;
    protected $productImage2;
    protected $productImage3;
    //protected $id=5;

public function getPName($id){
    $this->dbh->query("select ProductName from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->ProductName;

}
   public function setPName($ProductName){
       $this->ProductName=$ProductName;
   } 
   public function getProductDesc($id){
    $this->dbh->query("select Description from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Description;

}
public function setProductDesc($Description){
    $this->Description=$Description;
} 

public function getProductQuantity($id){
    $this->dbh->query("select Quantity from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Quantity;

}
public function setProductQuantity($Quantity){
    $this->Quantity=$Quantity;
} 
public function getProductPrice($id){
    $this->dbh->query("select Price from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->Price;

}
public function setProductPrice($Price){
    $this->Price=$Price;
} 
public function getProductimg1($id){
    $this->dbh->query("select productImage1 from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->productImage1;

}
public function setProductimg1($productImage1){
    $this->productImage1=$productImage1;
} 

public function getProductimg2($id){
    $this->dbh->query("select productImage2 from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->productImage2;

}
public function setProductimg2($productImage2){
    $this->productImage2=$productImage2;
} 
 
public function getProductimg3($id){
    $this->dbh->query("select productImage3 from products where 'ProductID' ='$id'");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->productImage3;

}
public function setProductimg3($productImage3){
    $this->productImage3=$productImage3;
} 

    public function editProducts($id)
    {
        $this->dbh->query("UPDATE products SET `ProductName`= :pname , `Quantity`= :pquantity , `Description`= :pdesc, `Price`= :pprice, `productImage1`=:pimg1 ,`productImage2`=:pimg2 , `productImage3`=:pimg3 WHERE `ProductID`=:id");
        $this->dbh->bind(':pname',$this->ProductName);
        $this->dbh->bind(':pdesc',$this->Description);
        $this->dbh->bind(':pquantity',$this->Quantity);
        $this->dbh->bind(':pprice',$this->Price);
        $this->dbh->bind(':pimg1',$this->productImage1);
        $this->dbh->bind(':pimg2',$this->productImage2);
        $this->dbh->bind(':pimg3',$this->productImage3);
        $this->dbh->bind(':id',$id);
        $result=$this->dbh->execute();
    


    }
    public function deleteProducts($id)
    {
        $result = $this->dbh->query("delete from products where ProductID ='$id'");
        return ($result)?true:false;
    }
}
