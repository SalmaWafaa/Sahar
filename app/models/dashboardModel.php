<?php
class dashboardModel extends model{
	public $title='Dashboard Page';
	public function Dash()
    {
        $this->dbh->query('SELECT * from contacttable ');
        $records=$this->dbh->resultSet();
        return $records;

    }
}