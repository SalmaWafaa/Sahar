<?php
class CheckoutModel extends model{
    public $title='Checkout Page';
    
    protected $ordernumb;
    protected $productid;
    protected $quantity;
    protected $address;
    protected $idclient;
    protected $paymentt;
    protected $shfees;
    protected $mobile;
    protected $total;
    protected $date;
    protected $Fname;
    protected $Lname;
    


    
    protected $ordernumbErr;
    protected $productidErr;
    protected $quantityErr;
    protected $addrssErr;
    protected $idclientErr;
    protected $paymenttErr;
    protected $shfeesErr;
    protected $mobileErr;
    protected $totalErr;
    protected $dateErr; 
    protected $FnameErr;
    protected $LnameErr; 
    
    
    public function __construct()
    {
        parent::__construct();

        $this->ordernumb   = "";
        $this-> productid= "";
        $this->  quantity= "";
        $this->  address= "";
        $this->  idclient= "";
        $this->  paymentt= "";
        $this->  shfees= "";
        $this->  mobile= "";
        $this->  total= "";
        $this->  date= "";
        $this->Fname     = "";
        $this->Lname     = "";
        
       
        

       
        $this->ordernumbErr   = "";
        $this-> productidErr= "";
        $this->  quantityErr= "";
        $this->  addressErr= "";
        $this->  idclientErr= "";
        $this->  paymenttErr= "";
        $this->  shfeesErr= "";
        $this->  mobileErr= "";
        $this->  totalErr= "";
        $this->  dateErr= "";
        $this->FnameErr = ""; 
        $this->LnameErr = "";
        $this->addressErr = "";
        $this->mobileErr = "";
    }
    public function getordernumb()
    {
        return $this->ordernumb;
    }

    public function setordernumb($ordernumb)
    {
        $this->ordernumb = $ordernumb;
    }


    public function getproductid()
    {
        return $this->productid;
    }

    public function setproductid($productid)
    {
        $this->productid = $productid;
    }


    public function getquantity()
    {
        return $this->quantity;
    }

    public function setquantity($quantity)
    {
        $this->quantity = $quantity;
    }


    public function getaddress()
    {
        return $this->address;
    }

    public function setaddress($address)
    {
        $this->address = $address;
    }


    public function getidclient()
    {
        return $this->idclient;
    }

    public function setidclient($idclient)
    {
        $this->idclient = $idclient;
    }


    public function getpaymentt()
    {
        return $this->paymentt;
    }

    public function setpaymentt($paymentt)
    {
        $this->paymentt = $paymentt;
    }


    public function getshfees()
    {
        return $this->shfees;
    }

    public function setshfees($shfees)
    {
        $this->shfees = $shfees;
    }


    public function getmobile()
    {
        return $this->mobile;
    }

    public function setmobile($mobile)
    {
        $this->mobile = $mobile;
    }


    public function gettotal()
    {
        return $this->total;
    }

    public function settotal($total)
    {
        $this->total = $total;
    }


    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date)
    {
        $this->date = $date;
    }
    public function getFName()
    {
        return $this->Fname;
    }

    public function setFName($Fname)
    {
        $this->Fname = $Fname;
    }
    public function getLName()
    {
        return $this->Lname;
    }

    public function setLName($Lname)
    {
        $this->Lname = $Lname;
    }



    public function getordernumbErr()
    {
        return $this->ordernumbErr;
    }

    public function setordernumbErr($ordernumbErr)
    {
        $this->ordernumbErr = $ordernumbErr;
    }


    public function getproductidErr()
    {
        return $this->productidErr;
    }

    public function setproductidErr($productidErr)
    {
        $this->productidErr = $productidErr;
    }


    public function getquantityErr()
    {
        return $this->quantityErr;
    }

    public function setquantityErr($quantityErr)
    {
        $this->quantityErr = $quantityErr;
    }


    public function getaddressErr()
    {
        return $this->addressErr;
    }

    public function setaddressErr($addressErr)
    {
        $this->addressErr = $addressErr;
    }


    public function getidclientErr()
    {
        return $this->idclientErr;
    }

    public function setidclientErr($idclientErr)
    {
        $this->idclientErr = $idclientErr;
    }


    public function getpaymenttErr()
    {
        return $this->paymenttErr;
    }

    public function setpaymenttErr($paymenttErr)
    {
        $this->paymenttErr = $paymenttErr;
    }


    public function getshfeesErr()
    {
        return $this->shfeesErr;
    }

    public function setshfeesErr($shfeesErr)
    {
        $this->shfeesErr = $shfeesErr;
    }


    public function getmobileErr()
    {
        return $this->mobileErr;
    }

    public function setmobileErr($mobileErr)
    {
        $this->mobileErr = $mobileErr;
    }


    public function gettotalErr()
    {
        return $this->totalErr;
    }

    public function settotalErr($totalErr)
    {
        $this->totalErr = $totalErr;
    }


    public function getdateErr()
    {
        return $this->dateErr;
    }

    public function setdateErr($dateErr)
    {
        $this->date = $dateErr;
    }
    public function getFNameErr()
    {
        return $this->FnameErr;
    }

    public function setFNameErr($FnameErr)
    {
        $this->FnameErr = $FnameErr;
    }
    public function getLNameErr()
    {
        return $this->LnameErr;
    }

    public function setLNameErr($LnameErr)
    {
        $this->LnameErr = $LnameErr;
    }
    public function checko()
    {
        $this->dbh->query("INSERT INTO users (`orderNumb`,`productID`, `Quantity`, `Address`,`ID`,`PaymentType`,`shippingFees`,`MobileNumb`,`Total`,`Date`) VALUES(:ordernumb, :productid, :quantity, :addrs, :idclient, :paymentt,:shfees,:mobile,:total,:datee)");
        $this->dbh->bind(':ordernumb', $this->ordernumb);
        $this->dbh->bind(':productid', $this->productid);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':addr', $this->address); 
        $this->dbh->bind(':idclient', $this->idclient);
        $this->dbh->bind(':paymentt', $this->paymentt);
        $this->dbh->bind(':shfees', $this->shfees);
        $this->dbh->bind(':mobile', $this->mobile);
        $this->dbh->bind(':total', $this->total);
        $this->dbh->bind(':datee', $this->date);

        return $this->dbh->execute();
    }


    
    

    
}