<?php
class galleryModel extends Model
{
    public  $title = 'Gallery';

    public function getAllPics()
    {
        $this->dbh->query('select * from gallery ');
        $usersRecord = $this->dbh->resultSet();
        return $usersRecord;

    }
}
