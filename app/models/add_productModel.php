<?php 
require_once "shopModel.php";
class add_productModel extends shopModel{
    public function add_product()
    {
        $this->dbh->query("INSERT INTO products (`productImage1`,`productImage2`,`productImage3`,`ProductName`, `Description`, `Quantity`,`Price`,`Cat_ID`) VALUES(:prod_img1 , :prod_img2 , :prod_img3 , :prod_name, :descr, :quantity, :price , :categ)");
        $this->dbh->bind(':prod_img1', $this->img1);
        $this->dbh->bind(':prod_img2', $this->img2);
        $this->dbh->bind(':prod_img3', $this->img3);
        $this->dbh->bind(':prod_name', $this->productName);
        $this->dbh->bind(':descr', $this->description);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':price', $this->price); 
        $this->dbh->bind(':categ', $this->Category); 
        

        return $this->dbh->execute();
    }
}
