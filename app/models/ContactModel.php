<?php
class ContactModel extends model{
	public $title='Contact Page';
    protected $a=2;
	protected $dsent;
	protected $userMail;
	protected $userID;
	protected $Subj;
	protected $msg;


    protected $dsenterr;
	protected $userMailerr;
	protected $userIDerr;
	protected $Subjerr;
	protected $msgerr;
	public function __construct()
    {
        parent::__construct();
        $this->dsent     = "";
        $this->userMail = "";
        $this->userID     = "";
        $this->Subj = "";
		$this->msg = "";


        $this->dsenterr     = "";
        $this->userMailerr = "";
        $this->userIDerr     = "";
        $this->Subjerr = "";
		$this->msgerr = "";
	}
	public function getdsent()
    {
        return $this->dsent;
        
    }
	public function getuserMail()
    {
        return $this->userMail;
    }

	public function getuserID ()
    {
        return $this->userID ;
    }

	public function getSubj()
    {
        return $this->Subj;
    }

	public function getmsg()
    {
        return $this->msg;
    }


	public function setdsent($dsent)
    {
        $this->dsent = $dsent;
    }
	public function setuserMail($userMail)
    {
        $this->userMail = $userMail;
    }
	public function setuserID($userID)
    {
        $this->userID = $userID;
    }
	public function setSubj($Subj)
    {
        $this->Subj = $Subj;
    }
	public function setmsg($msg)
    {
        $this->msg= $msg;
    }




    public function getdsenterr()
    {
        return $this->dsenterr;
    }
	public function getuserMailerr()
    {
        return $this->userMailerr;
    }

	public function getuserIDerr ()
    {
        return $this->userIDerr ;
    }

	public function getSubjerr()
    {
        return $this->Subjerr;
    }

	public function getmsgerr()
    {
        return $this->msgerr;
    }

    
	public function setdsenterr($dsenterr)
    {
        $this->dsenterr = $dsenterr;
    }
	public function setuserMailerr($userMailerr)
    {
        $this->userMailerr = $userMailerr;
    }
	public function setuserIDerr($userIDerr)
    {
        $this->userIDerr = $userIDerr;
    }
	public function setSubjerr($Subjerr)
    {
        $this->Subjerr = $Subjerr;
    }
	public function setmsgerr($msgerr)
    {
        $this->msgerr= $msgerr;
    }

    public function contactMsg()
    {
        $this->dbh->query("INSERT INTO contacttable (`dateSent`,`UserEmail`, `UserID`, `Subject`,`Message`) VALUES(:dsent, :userMail, :userID,  :Subj, :msg)" );
        $this->dbh->bind(':dsent', $this->dsent);
        $this->dbh->bind(':userMail', $this->userMail);
        $this->dbh->bind(':userID',$this->userID);
        $this->dbh->bind(':Subj', $this->Subj);
        $this->dbh->bind(':msg', $this->msg); 

        return $this->dbh->execute();
    }
    

	public function Contact()
    {
        $this->dbh->query('SELECT * from pages where `Pages_ID` = :id');
        $this->dbh->bind(':id', $this->a); 

        $records=$this->dbh->resultSet();
        return $records;
        

    }
	
	
}
