<?php
class OrdershistoryModel extends model
{
    public  $title = 'Order History';
    public function ordersHistory($id)
    {
      

   $this->dbh->query(' SELECT * FROM products,orders,users,cart WHERE orders.User_ID = users.ID AND users.ID = cart.User_ID AND products.ProductID=cart.Product_ID
   GROUP BY :id');




    $this->dbh->bind(':id',$id);
    $Record = $this->dbh->resultSet();
    return $Record;
    }
 

}
?>