<?php 
require_once "offersModel.php";
class add_offerModel extends offersModel{
    public function add_offerr()
    {
        $this->dbh->query("INSERT INTO offers (`OfferDescription`,`Old_Price`,`New_Price`) VALUES(:OfferDescription, :Old_Price, :New_Price)");
        $this->dbh->bind(':OfferDescription', $this->OfferDescription);
        $this->dbh->bind(':New_Price', $this->New_Price);
        $this->dbh->bind(':Old_Price', $this->Old_Price);
        return $this->dbh->execute();
    }
}