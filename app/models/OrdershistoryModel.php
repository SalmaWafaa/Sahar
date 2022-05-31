<?php
class OrdershistoryModel extends model
{
    public  $title = 'Order History';
    public function ordersHistory($id)
    {
    $this->dbh->query('SELECT * from orders,products WHERE `ID` =:id');
    $this->dbh->bind(':id',$id);
    $Record = $this->dbh->resultSet();
    return $Record;
    }
    

}
?>