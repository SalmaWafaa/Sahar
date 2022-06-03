<?php
require_once 'RegisterModel.php';
class DeleteProfileModel extends RegisterModel
{
    public  $title = 'Delete Profile Page';
    public function delete($id)
    {
    $this->dbh->query('DELETE FROM `users`WHERE ID =:ID');
    $this->dbh->bind(':ID',$id);
    $record = $this->execute();
    
    return $record;

   }
}