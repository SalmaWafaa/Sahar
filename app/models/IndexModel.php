<?php
class IndexModel extends model
{
     public $title = 'Sahar Quick care ' . APP_VERSION;
     public  function newarrival()
     {
          $this->dbh->query(" SELECT *FROM products b1 WHERE 3 > (SELECT COUNT(*) FROM products b2 
          WHERE b2.ProductID > b1.ProductID)");
           $Record = $this->dbh->resultSet();
           return $Record;

     }

}
