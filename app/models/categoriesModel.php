<?php
class categoriesModel extends Model
{
    public  $title = 'Categories Page';
    protected $CategoryName;
    protected $CategoryNameErr;
    protected $CategoryImage;
    protected $CategoryImageErr;

    public function __construct()
    {
        parent::__construct();
        $this->CategoryName     = "";
        $this->CategoryNameErr = "";
        $this->CategoryImage= "";
        $this->CategoryImageErr = "";
       
    }

    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
    }

    public function getCategoryNameErr()
    {
        return $this->CategoryNameErr;
    }
    public function setCategoryNameErr($CategoryNameErr)
    {
        $this->CategoryNameErr = $CategoryNameErr;
    }
    public function getCategoryImage()
    {
        return $this->CategoryImage;
    }
    public function setCategoryImage($CategoryImage)
    {
        $this->CategoryImage = $CategoryImage;
    }

    public function getCategoryImageErr()
    {
        return $this->CategoryImageErr;
    }
    public function setCategoryImageErr($CategoryImageErr)
    {
        $this->CategoryImageErr = $CategoryImageErr;
    }

    public function view_Categories()
    {
        $this->dbh->query('SELECT * from categories ');
        $this->dbh->bind(':cat_name', $this->CatName);
        $this->dbh->bind(':cat_img', $this->CatImage);
        $records=$this->dbh->resultSet();
        $category = $records->category;

    }
   
    public function findCategory($CategoryName)
    {
        $this->dbh->query('select * from categories where CatName=:cat_name');
        $this->dbh->bind(':cat_name', $CategoryName);
        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function CategoryExist($CategoryName)
    {
        return $this->findCategory($CategoryName) > 0;
    }
}
?>