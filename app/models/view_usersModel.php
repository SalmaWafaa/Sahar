<?php
class view_usersModel extends Model
{
    public  $title = 'Users Profiles Page';

    public function getAllUsers()
    {
        $this->dbh->query('select * from users ');
        $usersRecord = $this->dbh->resultSet();
        return $usersRecord;

    }
    
}
?>
