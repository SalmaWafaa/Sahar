<?php
class AboutModel extends model
{
     public $title = 'About Us';
     public function About()
    {
        $this->dbh->query('SELECT * from pages where `Pages_ID` = 1 ');
        $records=$this->dbh->resultSet();
        return $records;

    }
    
}
