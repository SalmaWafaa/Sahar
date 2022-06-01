<?php
require_once "shopModel.php";

class offersModel extends shopModel
{
    public  $title = 'Offers Page';
    protected $OfferDescription;

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