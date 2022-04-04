<?php
class view_orderModel extends Model
{
    public  $title = 'Orders Page';

    public function view_order()
    {
        $this->dbh->query('SELECT * from ordersS ');
        $records=$this->dbh->resultSet();

    }
}
?>