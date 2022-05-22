<?php 
require_once "categoriesModel.php";
class add_categoryModel extends categoriesModel{
    public function add_category()
    {
        $this->dbh->query("INSERT INTO categories (`CatName`,`CatImage`) VALUES(:cat_name, :cat_img)");
        $this->dbh->bind(':cat_img', $this->CategoryImage);
        $this->dbh->bind(':cat_name', $this->CategoryName);
        return $this->dbh->execute();
    }
}
