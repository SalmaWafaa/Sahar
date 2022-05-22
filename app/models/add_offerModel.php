<?php 
require_once "offerModel.php";
class add_offerModel extends offerModel{
    public function add_productoffer()
    {
        $this->dbh->query("INSERT INTO offers (`OfferName`,`Offerimage`) VALUES(:offer_name, :offer_img)");
        $this->dbh->bind(':offer_img', $this->Offerimage);
        $this->dbh->bind(':offer_name', $this->OfferName);
        return $this->dbh->execute();
    }
}