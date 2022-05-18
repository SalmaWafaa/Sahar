<?php
class ContactModel extends model{
	public $title='Contact Page';
	public function Contact()
    {
        $this->dbh->query('SELECT * from contactdata ');
        $records=$this->dbh->resultSet();
        return $records;

    }
	
}
