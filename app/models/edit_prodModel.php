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
    
}
?>
