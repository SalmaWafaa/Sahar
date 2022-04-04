<?php
class ViewOrderModel extends Model
{
    public  $title = 'Orders Page';

    public function ViewOrder()
    {
        $this->dbh->query('SELECT * from ordersS ');
        $records=$this->dbh->resultSet();

    }
}
?>