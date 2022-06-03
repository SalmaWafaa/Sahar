<?php
require_once 'shopModel.php';
class edit_imagesModel extends shopModel
{
    public  $title = 'Edit Images Page';
   
    protected $ProductImage;
    protected $Product_Image2;
    protected $Product_Image3;
    
    public function getProductimg1($id){
        $this->dbh->query("SELECT ProductImage from products where `ProductID` =:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->ProductImage;
    
    }
    public function setProductimg1($ProductImage){
        $this->ProductImage=$ProductImage;
    } 
    
    public function getProductimg2($id){
        $this->dbh->query("SELECT Product_Image2 from products where `ProductID` =:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Product_Image2;
    }
    public function setProductimg2($Product_Image2){
        $this->Product_Image2=$Product_Image2;
    } 
    public function getProductimg3($id){
        $this->dbh->query("SELECT Product_Image3 from products where `ProductID` =:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Product_Image3;
    
    }
    public function setProductimg3($Product_Image3){
        $this->Product_Image3=$Product_Image3;
    } 
    public function editimages($id)
    {
        $this->dbh->query("UPDATE products SET `ProductImage`=:pimg1 ,`Product_Image2`=:pimg2 , `Product_Image3`=:pimg3 WHERE `ProductID`=:id");
        $this->dbh->bind(':pimg1',$this->ProductImage);
        $this->dbh->bind(':pimg2',$this->Product_Image2);
        $this->dbh->bind(':pimg3',$this->Product_Image3);
        $this->dbh->bind(':id',$id);
        return $this->dbh->execute();

    }
}