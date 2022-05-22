<?php
class dashboardModel extends model{
	public $title='Dashboard Page';
	public function Msg()
    {
        $this->dbh->query('SELECT * from contacttable ');
        $records=$this->dbh->resultSet();
        return $records;

    }
}