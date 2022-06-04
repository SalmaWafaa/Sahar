<?php 

class add_colorModel extends model{
    protected $color;
    public $title ="Add Color";
    public function add_colorrr()
    {
        $this->dbh->query("INSERT INTO color (`color`) VALUES(:color)");
        $this->dbh->bind(':color', $this->color);
        return $this->dbh->execute();

    }
    public function getColorr()
    {
        return $this->color;
    }
    public function setColorr($color)
    {
        $this->color = $color;
    }
}
