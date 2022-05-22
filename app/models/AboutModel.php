<?php
class AboutModel extends model
{
     public $title = 'About Us';
     public function About()
    {
        $this->dbh->query('SELECT * from aboutus ');
        $records=$this->dbh->resultSet();
        return $records;

    }
    
}
