<?php
require_once "shopModel.php";

class offersModel extends shopModel
{
    public  $title = 'Offers Page';
    protected $OfferDescription;
    protected $Old_Price;
    protected $New_Price;

    public function __construct()
    {
        parent::__construct();
        $this->OfferDescription="";
       
    }
   
    public function getOfferDescription()
    {
        return $this->OfferDescription;
    }
    public function setOfferDescription($OfferDescription)
    {
        $this->OfferDescription = $OfferDescription;
    }
    public function getOld_Price()
{
    return $this->Old_Price;

}

public function setOld_Price($Old_Price)
    {
        $this->Old_Price = $Old_Price;
    }

    public function setNew_Price($New_Price)
    {
        $this->New_Price = $New_Price;
    }

public function getNew_Price()
{
    return $this->New_Price;

}
    public function view_offers()
    {
        $this->dbh->query('SELECT * from offers, products where Product_ID = ProductID'  );
        $records=$this->dbh->resultSet();
        return $records;

    }
    public function findOfferProduct($OfferProductName)
    {
        $this->dbh->query('select * from products where OfferName=:Offer_Name');
        $this->dbh->bind(':Offer_Name', $OfferProductName);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function ProductExist($OfferProductName)
    {
        return $this->findProduct($OfferProductName) > 0;
    }
}
?>