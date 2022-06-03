<?php
require_once 'shopModel.php';
class DeleteProductModel extends shopModel
{
    public  $title = 'Delete product Page';

    public function deletep($id)
    {
    $this->dbh->query('DELETE FROM `products`WHERE ProductID =:ID');
    $this->dbh->bind(':ID',$id);
    $record = $this->execute();
    
    return $record;
    }
}