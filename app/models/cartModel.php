<?php
class cartModel extends Model
{
    public  $title = ' My Cart ';



    public function cart()
    {
        $this->dbh->query('SELECT * from products ');
        $records=$this->dbh->resultSet();
        return $records;

        
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
        
        
    }
}
    class Product
    {
        public $id;
        public $name;
        public $image;
        public $price;
        public $options;
        function __construct($id) {
            $db_handle = new DB();
            $sql="SELECT * FROM product WHERE id=".$id;
            /////
            $result = mysqli_query($db_handle->conn,$sql);
            if($row=mysqli_fetch_array($result)) {
                $this->id=$row[0];
                $this->name=$row[1];
                $this->image=$row[2];
                $this->price=$row[3];
                $this->options=array();
            }
            $sql="SELECT options.Name,product_s_o_v.Value 
            from options 
            INNER JOIN product_type_s_o on options.ID=product_type_s_o.Options
            INNER Join product_s_o_v on product_type_s_o.ID=product_s_o_v.Product_Type_S_O
            where product_s_o_v.Product_ID=".$id;
            $result = mysqli_query($db_handle->conn,$sql);
            while($row=mysqli_fetch_array($result)) {
                $this->options[$row['Name']]=$row[1];//x['drug strength']=500mg
            }	
        }
    
        static function getAllProducts()	{
            $products;$i=0;
            $db_handle = new DB();
            $sql="SELECT * from product";
            $result = mysqli_query($db_handle->conn,$sql);
            while($row=mysqli_fetch_array($result)) {
                $products[$i++]=new Product($row[0]);
            }	
            return $products;
        }
    }
    class Cart
    {
        public $productsQuantity;
    
        function __construct(){
            $this->productsQuantity=array();
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
