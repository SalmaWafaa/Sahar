<?php
class ContactModel extends model{
	public $title='Contact Page';
	protected $dsent;
	protected $userMail;
	protected $userID;
	protected $Subj;
	protected $msg;
	public function __construct()
    {
        parent::__construct();
        $this->dsent     = "";
        $this->userMail = "";
        $this->userID     = "";
        $this->Subj = "";
		$this->msg = "";
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
	public function setmsg($msgt)
    {
        $this->msg= $msg;
    }

    public function contactMsg()
    {
        $this->dbh->query("INSERT INTO contacttable (`datSent`,`UserEmail`, `UserID`, `Subject`,`Message`) VALUES(:dsent, :userMail, :userID,  :Subj, :msg)");
        $this->dbh->bind(':dsent', $this->dsent);
        $this->dbh->bind(':userMail', $this->userMail);
        $this->dbh->bind(':userID', $this->userID);
        $this->dbh->bind(':Subj', $this->Subj);
        $this->dbh->bind(':msg', $this->msg); 

        return $this->dbh->execute();
    }

	public function Contact()
    {
        $this->dbh->query('SELECT * from contactdata ');
        $records=$this->dbh->resultSet();
        return $records;

    }
	
	
}
