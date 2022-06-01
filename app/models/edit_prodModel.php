<?php
class edit_prodModel extends Model
{
    public  $title = 'Products Page';

    public function getAllProducts()
    {
        $this->dbh->query('select * from products ');
        $usersRecord = $this->dbh->resultSet();
        return $usersRecord;

    }
    public function getproductsOFS()
    {
        $this->dbh->query('SELECT * from products where Quantity <7 ');
        $Record = $this->dbh->resultSet();
        return $Record;

    }
    
}
?>
