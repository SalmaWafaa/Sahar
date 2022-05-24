<?php
require_once 'categoriesModel.php';
class Edit_categoryModel extends categoriesModel
{
    public  $title = 'Edit and Delete Categories Page';

public function getCName($id){
    $this->dbh->query("SELECT CatName from categories where `catID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->CatName;

}
   public function setCName($CategoryName){
       $this->CategoryName=$CategoryName;
   } 
   public function getCimage($id){
    $this->dbh->query("SELECT CatImage from categories where `catID` =:id");
    $this->dbh->bind(':id',$id);
    return $this->dbh->single()->CatImage;

}
public function setCimage($CategoryImage){
    $this->CategoryImage=$CategoryImage;
} 

    public function editCategories($id)
    {
        $this->dbh->query("UPDATE categories SET `CatName`= :cname , `CatImage`= :cimage  WHERE `catID`=:id");
        $this->dbh->bind(':cname',$this->CategoryName);
        $this->dbh->bind(':cimage',$this->CategoryImage);
        $this->dbh->bind(':id',$id);
        return $this->dbh->execute();

    }
    public function deleteCategories($id)
    {
        $result = $this->dbh->query("DELETE from categories where `catID` =:id");
        return ($result)?true:false;
    }
}
