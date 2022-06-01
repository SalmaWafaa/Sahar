<?php
class view_messagesModel extends Model
{
    public  $title = 'Messages Page';

    public function view_messages()
    {
        $this->dbh->query('SELECT * from contacttable ');
        $records=$this->dbh->resultSet();
        return $records;

    }
}
?>