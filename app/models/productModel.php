<?php
require_once "shopModel.php";

class productModel extends shopModel
{
    public  $title = 'Product Page';
    //public $cartModel cartLM {get;set;}

    public function product($id)
    {
        $this->dbh->query('SELECT * from products  WHERE ProductID=".$id');
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':productName', $this->productName);
        $this->dbh->bind(':price', $this->price);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':rate', $this->rate);
        $record = $this->dbh->resultSet();
        $product = $record->product;

        $this->id=$record->productID;
        $this->productName=$record->productName;
        $this->productImage=$record->productImage;
        $this->description=$record->Description;
        $this->options=array();

        $this->dbh->query('SELECT options.Name,product_s_o_v.Value 
		from options INNER JOIN product_type_s_o on options.ID=product_type_s_o.Options
        INNER Join product_s_o_v on product_type_s_o.ID=product_s_o_v.Product_Type_S_O
		where product_s_o_v.Product_ID='.$id);
        foreach($record as $x) {
			$this->options[$x['productName']]=$x->productID; //x['drug strength']=500mg
		}
    }
        
        public function getProduct($id){
            $this->dbh->query('select * from products where `ProductID`=:id');
            $this->dbh->bind(':id',$id);
            $PRecords = $this->dbh->resultSet();
            return $PRecords;
        }
        public function InStock($id){
            $this->dbh->query('SELECT Quantity from products where `ProductID`=:id');
            $this->dbh->bind(':id',$id);
            return $this->dbh->single()->Quantity;
        }
        public  function newarrival()
        {
             $this->dbh->query(" SELECT *FROM products b1 WHERE 3 > (SELECT COUNT(*) FROM products b2 
             WHERE b2.ProductID > b1.ProductID)");
              $Record = $this->dbh->resultSet();
              return $Record;
   
        }
    }

