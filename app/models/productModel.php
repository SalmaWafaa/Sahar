<?php
class productModel extends Model
{
    public  $title = 'Product Page';
    protected $description;
    protected $descriptionErr;
    protected $productName;
    protected $productNameErr;
    protected $productImageErr;
    protected $productImage;
    protected $price;
    protected $priceErr;
    protected $quantity;
    protected $quantityErr;
    protected $rate;
    protected $rateErr;
    public $id;
    public $options;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function setDescriptionErr()
    {
        return $this->description;
    }

    public function getDescriptionErr($descriptionErr)
    {
        $this->descriptionErr = $descriptionErr;
    }

    public function getProductName()
    {
        return $this->productName;
    }
 
    public function setproductName()
    {
        return $this->productName;
    }

    public function setproductErr()
    {
        return $this->productName;
    }

    public function setproductNameErr($productNameErr)
    {
        $this->productNameErr = $productNameErr;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPriceErr()
    {
        return $this->priceErr;
    }
    public function setPriceErr($priceErr)
    {
        $this->priceErr = $priceErr;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantityErr()
    {
        return $this->quantityErr;
    }
    public function setQuantityErr($quantityErr)
    {
        $this->quantityErr = $quantityErr;
    }
    public function getRate()
    {
        return $this->rate;
    }
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    public function getRateErr()
    {
        return $this->RateErr;
    }
    public function setRateErr($rateErr)
    {
        $this->rateErr = $rateErr;
    }
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
}
