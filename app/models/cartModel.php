<?php
require_once "productModel.php";
class cartModel extends productModel 
{
    public  $title = ' My Cart ';
    public $productsQuantity;
    function __construct(){
        $this->productsQuantity=array();
    }
        public function addProduct($productID,$q){
            if (array_key_exists((string)$productID,$this->productsQuantity))
                $this->productsQuantity[(string)$productID]+= $q;
            else
                $this->productsQuantity[(string)$productID]= $q;
        }
    
        public function removeProduct($productID){
            unset($this->productsQuantity[(string)$productID]); 
        }
    
        public function emptyCart(){
            unset($this->productsQuantity); 
            $this->productsQuantity=array();
        }
        
  
     public function prod($id){
        $this->dbh->query('SELECT * from products where `ProductID`=:id ');
        $records=$this->dbh->resultSet();
        $this->dbh->bind(':id', $id);
        return $records;
        }
}
