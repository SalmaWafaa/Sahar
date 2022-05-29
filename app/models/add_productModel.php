<?php 
require_once "shopModel.php";
class add_productModel extends shopModel{
    public function add_product()
    {   $this->dbh->query("SELECT ProductID from products order by ProductID desc limit 1");
        $prodID=$this->dbh->single()->ProductID;
        $newID= $prodID+1;
        $this->dbh->query("INSERT INTO products (`productImage`,`product_Image2`,`product_Image3`,`ProductName`, `Description`, `Quantity`,`Price`,`Cat_ID`,`About`,`PCondition`) VALUES(:prod_img1 , :prod_img2 , :prod_img3 , :prod_name, :descr, :quantity, :price , :categ,:about,:pcond)");
        $this->dbh->bind(':prod_img1', $this->img1);
        $this->dbh->bind(':prod_img2', $this->img2);
        $this->dbh->bind(':prod_img3', $this->img3);
        $this->dbh->bind(':prod_name', $this->productName);
        $this->dbh->bind(':descr', $this->description);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':price', $this->price); 
        $this->dbh->bind(':categ', $this->Category); 
        $this->dbh->bind(':about', $this->About); 
        $this->dbh->bind(':pcond', $this->PCondition); 
        //$this->dbh->bind(':datee', $this->datee); 
         $this->dbh->execute();
       //echo $this->Category;
       foreach($this->color as $CID ){
        $this->dbh->query("INSERT INTO attributes (`Product_ID`,`color_ID`) VALUES(:pid , :cid )");
        $this->dbh->bind(':pid', $newID);
        $this->dbh->bind(':cid', $CID); 
        $this->dbh->execute();
       }
      /*foreach($this->Quality as $QID ){
        $this->dbh->query("UPDATE attributes SET `Q_ID`=:qid WHERE `Product_ID`=:pid ");
        $this->dbh->bind(':pid', $newID);
        $this->dbh->bind(':qid', $QID); 
        $this->dbh->execute();
    }*/
}
    public function countID(){
       $x=$this->dbh->query("SELECT COUNT(catID) FROM categories");
        return $x;

    }
    public function countColorID(){
        $c=$this->dbh->query("SELECT COUNT(cID) FROM color");
         return $c;
 
     }
    public function getCategs()
    {
        $this->dbh->query('select * from categories ');
        $Record = $this->dbh->resultSet();
        return $Record;

    }
    public function getQualties()
    {
        $this->dbh->query('select * from Quality ');
        $Record = $this->dbh->resultSet();
        return $Record;

    }
   
}
