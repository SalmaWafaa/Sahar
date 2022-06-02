<?php
class summaryModel extends Model
{
    public  $title = 'Summary Page';
    public $ProductID;
    public $id;

    public function getIDprod()
    {
        return $this->ProductID;
    }
    public function SetIDprod($ProductID)
    {
        $this->ProductID = $ProductID;
    }
    public function orderUser($id)
    {
        $this->dbh->query('SELECT * from users WHERE ID = :id');
        $this->dbh->bind(':id', $this->id);
        $Record = $this->dbh->resultSet();
        return $Record;
    }
    public function orderSummary($id)
    {
        $this->dbh->query("SELECT a.* ,b.Id from  orders a inner join users b on  b.ID = a.Id 
        where  a.Date = ( select max(Date) from   orders where  a.Id = b.ID AND a.ID =:id)");
        $this->dbh->bind(':id', $id);
       
        return $this->dbh->single();
    }
    public function orderProduct($id)
    {
      // $x=$this->model->getIDprod();
        $this->dbh->query('SELECT * from products where `ProductID` =:id');
        $this->dbh->bind(':id', $id);
        $Record = $this->dbh->single();
        return $Record;
    }


}
