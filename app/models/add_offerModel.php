<?php 
require_once "offersModel.php";
class add_offerModel extends offersModel{
    public function add_offer($pID)
    {
        $this->dbh->query("INSERT INTO offers (`OfferDescription`,`Old_Price`,`New_Price`,`Product_ID`) VALUES(:OfferDescription, :Old_Price, :New_Price, :pid)");
        $this->dbh->bind(':OfferDescription', $this->OfferDescription);
        $this->dbh->bind(':New_Price', $this->New_Price);
        $this->dbh->bind(':Old_Price', $this->Old_Price);
        $this->dbh->bind(':pid', $pID);

        return $this->dbh->execute();
    }
}