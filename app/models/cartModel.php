<?php
class cartModel extends Model
{
    public  $title = ' My Cart ';
    public $productsQuantity;
    function __construct(){
        $this->productsQuantity=array();
    }
    public function cart()
    {
      
        if(!empty($_SESSION["shopping_cart"]))
        {
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $key => $value) 
            {
                ?>
                <tr>
                    <td><?php echo $value["item_name"]; ?></td>
                    <td><?php echo $value["item_quantity"]; ?></td>
                    <td>$ <?php echo $value["item_price"]; ?></td>
                    <td>
                        $ <?php echo number_format($value["item_quantity"] * $value["item_price"], 2); ?></td>
                    <td><a href="rogrogshop.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span
                                class="text-danger">Remove Item</span></a></td>

                </tr>
                <?php
                $total = $total + ($value["item_quantity"] * $value["item_price"]);
            }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <th align="right">$ <?php echo number_format($total, 2); ?></th>
                    <td></td>
                </tr>
                <?php
        }
        
        
    
    
      
    
        function addProduct($productID,$q){
            if (array_key_exists((string)$productID,$this->productsQuantity))
                $this->productsQuantity[(string)$productID]+= $q;
            else
                $this->productsQuantity[(string)$productID]= $q;
        }
    
        function removeProduct($productID){
            unset($this->productsQuantity[(string)$productID]); 
        }
    
        function emptyCart(){
            unset($this->productsQuantity); 
            $this->productsQuantity=array();
        }
       
    }
    public function prod(){
        $this->dbh->query('SELECT * from products where `ProductID`=:id ');
        $records=$this->dbh->resultSet();
        return $records;
        }
}
