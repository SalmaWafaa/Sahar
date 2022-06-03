<html>
<?php
class Ordershistory extends view
{

  public function output()
  {
    $title = $this->model->title;
        require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="bg-warning">
    <div class="container">
      <h1 class="display-4"><center> $title</center></h1>
    </div>
  </div>
 
EOT;
    echo $text;
    //$e="Edit";
    ?>
    <table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>Name</th>
      <th>address</th>
      <th>Mobile number</th>
			<th>Quantity</th>
			<th>Price</th>
      <th>paymentType</th>
			<th>shipping fees</th>
      <th>Total</th>
		</tr>
    </thead>
       <?php  
       $order=$this->model->ordersHistory();
       foreach($order as $x)
        {
    //$action = VIEWS_PATH . 'products/edit_delete_product.php';
            ?>  
        <tr>	
        <td> <?php echo $x->ProductName;?></td>
        <td> <?php echo $x->Address;?></td>
       <td><?php echo $x->MobileNumb;?></td>
       <td> <?php echo $x->Quantity;?></td>
        <td> <?php echo $x->Price;?></td>
        <td><?php echo $x->paymentType ;?></td>
       <td><?php echo $x->shippingFees;?></td> 
       <td><?php echo $x->Total;?></td>
             </tr>
    
    <?php
        }
        ?>       
        </table>
      <?php
      require APPROOT . '/views/inc/footer.php';
  }
}  ?>
</html>

