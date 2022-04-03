<?php 
require_once "shopModel.php";
class add_productModel extends shopModel{
    public function add_product()
    {
        $this->dbh->query("INSERT INTO products (`ProductImage`,`ProductName`, `Description`, `Quantity`,`Price`) VALUES(:prod_img, :prod_name, :descr, :quantity, :price)");
        $this->dbh->bind(':prod_img', $this->img);
        $this->dbh->bind(':prod_name', $this->productName);
        $this->dbh->bind(':descr', $this->description);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':price', $this->price); 
        

        return $this->dbh->execute();
    }
}