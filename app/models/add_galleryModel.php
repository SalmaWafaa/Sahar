<?php 
class add_galleryModel extends Model{
    protected $PicName;
    protected $PicNameErr;
    public  $title = 'Add Pictures in gallery Page';
    public function getPicName()
    {
        return $this->PicName;
    }
    public function setPicName($PicName)
    {
        $this->PicName = $PicName;
    }

    public function getPicNameErr()
    {
        return $this->PicNameErr;
    }
    public function setPicNameErr($PicNameErr)
    {
        $this->PicNameErr = $PicNameErr;
    }
    
    public function add_Pic()
    {
        $this->dbh->query("INSERT INTO gallery (`PicName`) VALUES(:pic_name)");
        $this->dbh->bind(':pic_name', $this->PicName);
        return $this->dbh->execute();
    }
}
