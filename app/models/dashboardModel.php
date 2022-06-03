<?php
class dashboardModel extends model{
	public $title='Dashboard Page';
	public function Msg()
    {
        $this->dbh->query('SELECT * from contacttable ');
        $records=$this->dbh->resultSet();
        return $records;

    }
    public function countusers()
    {
        $this->dbh->query('SELECT COUNT(ID) FROM users WHERE `user_Type_ID`=2');
        $records=$this->dbh->resultFetchCol();
        return $records;

    }
    public function countproducts()
    {
        $this->dbh->query('SELECT COUNT(ProductID) FROM products');
        $records=$this->dbh->resultFetchCol();
        return $records;

    }
}