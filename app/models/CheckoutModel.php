<?php
class CheckoutModel extends model{
    public $title='Checkout Page';
    
    protected $ordernumb;
    protected $productid;
    protected $quantity;
    protected $address;
    protected $email;
    protected $idclient;
    protected $paymentt;
    protected $shfees;
    protected $mobile;
    protected $mobile2;
    protected $total;
    protected $date;
    protected $Fname;
    protected $Lname;
    


    
    protected $ordernumbErr;
    protected $productidErr;
    protected $quantityErr;
    protected $addrssErr;
    protected $emailErr;
    protected $idclientErr;
    protected $paymenttErr;
    protected $shfeesErr;
    protected $mobileErr;
    protected $mobile2Err;
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


    public function getquantityy()
    {
        return $this->quantity;
    }

    public function setquantityy($quantity)
    {
        $this->quantity = $quantity;
    }


    public function getaddresss($id)
    {
        $this->dbh->query("SELECT Address from users where `ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Address;
    }

    public function setaddresss($address)
    {
        $this->address = $address;
    }
    public function getEmaill($id)
    {
        $this->dbh->query("SELECT Email from users where `ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Email;
    }

    public function setEmaill($email)
    {
        $this->email = $email;
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


    public function getmobilee($id)
    {
        $this->dbh->query("SELECT Mobile from users where `ID`=:id");
        $this->dbh->bind(':id',$id);
        return $this->dbh->single()->Mobile;
    }

    public function setmobilee($mobile)
    {
        $this->mobile = $mobile;
    }
    public function getmobile2()
    {
        return $this->mobile2;
    }

    public function setmobile2($mobile2)
    {
        $this->mobile2 = $mobile2;
    }



    public function gettotal()
    {
        return $this->total;
    }

    public function settotal($total)
    {
        $this->total = $total;
    }


    public function getdatee()
    {
        return $this->date;
    }

    public function setdatee($date)
    {
        $this->date = $date;
    }
    public function getFNamee($id)
    {
        $this->dbh->query("SELECT FirstName from users where `ID`=:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->FirstName;
    }

    public function setFNamee($Fname)
    {
        $this->Fname = $Fname;
    }
    public function getLNamee($id)
    {
     $this->dbh->query("SELECT LastName from users where `ID`=:id");
     $this->dbh->bind(':id',$id);
     return $this->dbh->single()->LastName;
    }

    public function setLNamee($Lname)
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


    public function getquantityyErr()
    {
        return $this->quantityErr;
    }

    public function setquantityyErr($quantityErr)
    {
        $this->quantityErr = $quantityErr;
    }


    public function getaddresssErr()
    {
        return $this->addressErr;
    }

    public function setaddresssErr($addressErr)
    {
        $this->addressErr = $addressErr;
    }
    public function getEmaillErr()
    {
        return $this->emailErr;
    }

    public function setEmaillErr($emailErr)
    {
        $this->emailErr = $emailErr;
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


   public function getmobileeErr()
    {
        return $this->mobileErr;
    }
    public function setmobileeErr($mobileErr)
    {
        $this->mobileErr = $mobileErr;
    } public function getmobile2Err()
    {
        return $this->mobile2Err;
    }
    public function setmobile2Err($mobile2Err)
    {
        $this->mobile2Err = $mobile2Err;
    }
    
    public function gettotalErr()
    {
        return $this->totalErr;
    }

    public function settotalErr($totalErr)
    {
        $this->totalErr = $totalErr;
    }


    public function getdateeErr()
    {
        return $this->dateErr;
    }

    public function setdateeErr($dateErr)
    {
        $this->date = $dateErr;
    }
    public function getFNameeErr()
    {
        return $this->FnameErr;
    }

    public function setFNameeErr($FnameErr)
    {
        $this->FnameErr = $FnameErr;
    }
    public function getLNameeErr()
    {
        return $this->LnameErr;
    }

    public function setLNameeErr($LnameErr)
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
    public function placeOrder($userID,$addr,$sf,$mob,$tot,$date)
    {
        $this->dbh->query("INSERT INTO orders (`User_ID`,  `Address`,`shippingFees`,`MobileNumb`,`Total`,`Date`) VALUES(:userID, :addr,:shfees,:mobile,:total,:datee)");
        $this->dbh->bind(':userID', $userID); 
        $this->dbh->bind(':addr', $addr); 
        $this->dbh->bind(':shfees', $sf);
        $this->dbh->bind(':mobile', $mob);
        $this->dbh->bind(':total', $tot);
        $this->dbh->bind(':datee', $date);
        return $this->dbh->execute();
    }

    public function TotalCart($userID){
        $this->dbh->query("SELECT SUM(cart.Quantity * products.Price) as `CartTotal`
        FROM cart
        INNER JOIN products ON products.ProductID = cart.Product_ID
        WHERE cart.User_ID =:userID");
        $this->dbh->bind(':userID',$userID);
        return $this->dbh->resultFetchCol();
    }


    
    

    
}