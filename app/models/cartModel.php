<?php
require_once "shopModel.php";
class cartModel extends shopModel 
{
    public  $title = ' My Cart ';
    public function getProductCartName($userID){

        $this->dbh->query("SELECT products.ProductName FROM products, cart WHERE cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function getProductCartQuantity($userID){

        $this->dbh->query("SELECT cart.Quantity FROM products, cart WHERE cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function getProductCartImage($userID){

        $this->dbh->query("SELECT products.ProductImage FROM products, cart WHERE cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function getProductCartPrice($userID){

        $this->dbh->query("SELECT products.Price FROM products, cart WHERE cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function getProductCartColor($userID){

        $this->dbh->query("SELECT color.color FROM cart, color, products WHERE color.cID = cart.Color_ID AND cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function getProductCartQuality($userID){

        $this->dbh->query("SELECT quality.value FROM cart, quality, products WHERE quality.Quality_ID = cart.Quality_ID AND cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    
    public function getNumberOfCartItems($userID){
    $this->dbh->query("SELECT User_ID FROM cart WHERE `User_ID`=:userID");
    $this->dbh->bind(":userID",$userID);
    return $this->dbh->resultFetchCol();
    }
    public function TotalCart($userID){
        $this->dbh->query("SELECT SUM(cart.Quantity * products.Price) as `CartTotal`
        FROM cart
        INNER JOIN products ON products.ProductID = cart.Product_ID
        WHERE cart.User_ID =:userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function EmptyCart($userID){
        $this->dbh->query("DELETE FROM cart WHERE `User_ID`=:userID");
        $this->dbh->bind(":userID",$userID);
         return $this->dbh->execute();
    }
    public function RemoveProductCarte($userID){

        $this->dbh->query("DELETE  FROM cart WHERE cart.Product_ID = products.ProductID AND cart.User_ID = :userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }
    public function Cartt($userID){
        $this->dbh->query("SELECT * FROM cart WHERE `User_ID`=:userID");
        $this->dbh->bind(":userID",$userID);
         return $this->dbh->single();
    }
        
}




