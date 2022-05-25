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
    protected $img1;
    protected $img2;
    protected $img3;
    protected $img1Err;
    protected $img2Err;
    protected $img3Err;
    protected $Category;
    protected $CategoryErr;


    public function __construct()
    {
        parent::__construct();
        $this->description     = "";
        $this->descriptionErr = "";
        $this->productName= "";
        $this->productNameErr = "";
        $this->img1    = "";
        $this->img1Err = "";
        $this->img2     = "";
        $this->img2Err = "";
        $this->img3     = "";
        $this->img3Err = "";
        $this->price = "";
        $this->priceErr = "";

        $this->quantity     = "";
        $this->quantityErr = "";

        $this->rate = "";
        $this->rateErr = "";
        $this->Category="";
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescriptionErr()
    {
        return $this->descriptionErr;
    }

    public function setDescriptionErr($descriptionErr)
    {
        $this->descriptionErr = $descriptionErr;
    }
    public function getCategory()
    {
        return $this->Category;
    }

    public function setCategory($Category)
    {
        $this->Category = $Category;
    }
    
    public function getCategoryErr()
    {
        return $this->CategoryErr;
    }

    public function setCategoryErr($CategoryErr)
    {
        $this->CategoryErr = $CategoryErr;
    }
    public function getimg1()
    {
        return $this->img1;
    }

    public function setimg1($img1)
    {
        $this->img1 = $img1;
    }
    
    public function getimg1Err()
    {
        return $this->img1Err;
    }

    public function setimg1Err($img1Err)
    {
        $this->img1Err = $img1Err;
    }
    public function getimg2()
    {
        return $this->img2;
    }

    public function setimg2($img2)
    {
        $this->img2 = $img2;
    }
    
    public function getimg2Err()
    {
        return $this->img2Err;
    }

    public function setimg2Err($img2Err)
    {
        $this->img2Err = $img2Err;
    }
    public function getimg3()
    {
        return $this->img3;
    }

    public function setimg3($img3)
    {
        $this->img3 = $img3;
    }
    
    public function getimg3Err()
    {
        return $this->img3;
    }

    public function setimg3Err($img3Err)
    {
        $this->img3Err = $img3Err;
    }



    public function getProductName()
    {
        return $this->productName;
    }
 
    public function setproductName($productName)
    {
        $this->productName = $productName;
    }

    public function getproductNameErr()
    {
        return $this->productNameErr;
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
        return $this->rateErr;
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

    public function findProduct($productName)
    {
        $this->dbh->query('select * from products where ProductName=:prod_name');
        $this->dbh->bind(':prod_name', $productName);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function ProductExist($productName)
    {
        return $this->findProduct($productName) > 0;
    }
    public function getAllProducts()
    {
        $this->dbh->query('select * from products ');
        $ProductsRecords = $this->dbh->resultSet();
        return $ProductsRecords;
    }
    public function getCategoryProducts($id){
        $this->dbh->query('select * from products where `Cat_ID`=:id');
        $this->dbh->bind(':id',$id);
        $categRecords = $this->dbh->resultSet();
        return $categRecords;
    }
}
