<?php
class view_categoriesModel extends Model
{
    public  $title = 'Categories Page';

    public function getAllCategories()
    {
        $this->dbh->query('select * from categories ');
        $Record = $this->dbh->resultSet();
        return $Record;

    }
}
?>