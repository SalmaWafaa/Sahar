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
	public function __construct()
    {
        parent::__construct();
        $this->$ordernumb   = "";
        $this-> $productid= "";
		$this->  $quantity= "";
		$this->  $address= "";
		$this->  $idclient= "";
		$this->  $paymentt= "";
		$this->  $shfees= "";
		$this->  $mobile= "";
		$this->  $total= "";
		$this->  $date= "";
        
		$this->$ordernumbErr   = "";
        $this-> $productidErr= "";
		$this->  $quantityErr= "";
		$this->  $addressErr= "";
		$this->  $idclientErr= "";
		$this->  $paymenttErr= "";
		$this->  $shfeesErr= "";
		$this->  $mobileErr= "";
		$this->  $totalErr= "";
		$this->  $dateErr= "";
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

    public function setquantity($quantityErr)
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
	public function signup()
    {
        $this->dbh->query("INSERT INTO users (`FirstName`,`LastName`, `Email`, `Password`,`Address`,`Mobile`,`user_Type_ID`) VALUES(:fname, :lname, :email, :pass, :addr, :mob,2)");
        $this->dbh->bind(':fname', $this->Fname);
        $this->dbh->bind(':lname', $this->Lname);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':addr', $this->address); 
        $this->dbh->bind(':mob', $this->mobile);

        return $this->dbh->execute();
    }


	
	

	
}