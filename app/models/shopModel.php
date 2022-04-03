<?php
class shopModel extends Model
{
    public  $title = 'Shop Page';
    protected $description;
    protected $descriptionErr;
    protected $productName;
    protected $productNameErr;
    protected $price;
    protected $priceErr;
    protected $quantity;
    protected $quantityErr;
    protected $rate;
    protected $rateErr;
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
    public function shop()
    {
        $this->dbh->query('SELECT * from products');
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':productName', $this->productName);
        $this->dbh->bind(':price', $this->price);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':rate', $this->rate);

        $record = $this->dbh->resultSet();
        $product = $record->product;
    }
    
}
