<?php
class offersModel extends Model
{
    public  $title = 'Offers Page';
    protected $OfferProductName;
    protected $OfferProductNameErr;
    protected $OfferProductImage;
    protected $OfferProductImageErr;

    public function __construct()
    {
        parent::__construct();
        $this->OfferProductName= "";
        $this->OfferProductNameErr = "";
        $this->OfferProductImage= "";
        $this->OfferProductImageErr = "";
       
    }

    public function getOfferProductName()
    {
        return $this->OfferProductName;
    }
    public function setOfferProductName($OfferProductName)
    {
        $this->OfferProductName = $OfferProductName;
    }

    public function getOfferProductNameErr()
    {
        return $this->OfferProductNameErr;
    }
    public function setOfferProductNameErr($OfferProductNameErr)
    {
        $this->OfferProductNameErr = $OfferProductNameErr;
    }
    public function getOfferProductImage()
    {
        return $this->OfferProductImage;
    }
    public function setOfferProductImage($OfferProductImage)
    {
        $this->OfferProductImage = $OfferProductImage;
    }

    public function getOfferProductImageErr()
    {
        return $this->OfferProductImageErr;
    }
    public function setOfferProductImageErr($OfferProductImageErr)
    {
        $this->OfferProductImageErr = $OfferProductImageErr;
    }

    public function view_offers()
    {
        $this->dbh->query('SELECT * from offers ');
        $this->dbh->bind(':offer_name', $this->OfferName);
        $this->dbh->bind(':offer_img', $this->Offerimage);
        $records=$this->dbh->resultSet();
        $OfferProduct = $records->OfferProduct;

    }
    public function findOfferProduct($OfferProductName)
    {
        $this->dbh->query('select * from products where OfferName=:offer_name');
        $this->dbh->bind(':offer_name', $OfferProductName);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function ProductExist($OfferProductName)
    {
        return $this->findProduct($OfferProductName) > 0;
    }
}
?>