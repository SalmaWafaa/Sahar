<?php 
require_once "offersModel.php";
class add_offerModel extends offersModel{
    public function add_offerr()
    {
        $this->dbh->query("INSERT INTO offers (`OfferName`,`Offerimage`) VALUES(:Offer_Name, :offer_img)");
        $this->dbh->bind(':offer_img', $this->Offerimage);
        $this->dbh->bind(':Offer_Name', $this->OfferName);
        return $this->dbh->execute();
    }
}