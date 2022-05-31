<?php
class offersModel extends Model
{
    public  $title = 'Offers Page';
    protected $OfferProductName;
    protected $OfferProductNameErr;
    protected $OfferProductImage;
    protected $OfferProductImageErr;
    protected $OfferName;
    protected $Offerimage;

    public function __construct()
    {
        parent::__construct();
        $this->OfferProductName= "";
        $this->OfferProductNameErr = "";
        $this->OfferProductImage= "";
        $this->OfferProductImageErr = "";
        $this->OfferName= "";
        $this->Offerimage  = "";
       
    }

    public function getOfferProductName()
    {
        return $this->OfferName;
    }
    public function setOfferProductName($OfferName)
    {
        $this->OfferName = $OfferName;
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
        return $this->Offerimage;
    }
    public function setOfferProductImage($Offerimage)
    {
        $this->Offerimage = $Offerimage;
    }

    public function getOfferProductImageErr()
    {
        return $this->OfferProductImageErr;
    }
    public function setOfferProductImageErr($Offerimage)
    {
        $this->Offerimage = $Offerimage;
    }

    public function view_offers()
    {
        $this->dbh->query('SELECT * from offers ');
        $this->dbh->bind(':Offer_Name', $this->OfferName);
        $this->dbh->bind(':offer_img', $this->Offerimage);
        $records=$this->dbh->resultSet();
        $OfferProduct = $records->OfferProduct;

    }
    public function findOfferProduct($OfferProductName)
    {
        $this->dbh->query('select * from products where OfferName=:Offer_Name');
        $this->dbh->bind(':Offer_Name', $OfferProductName);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function ordersHistory($id)
    {
    $this->dbh->query('SELECT * from products WHERE `ProductID` =:id');
    $this->dbh->bind(':id',$id);
    $Record = $this->dbh->resultSet();
    return $Record;
    }
    

    public function ProductExist($OfferProductName)
    {
        return $this->findProduct($OfferProductName) > 0;
    }
}
?>