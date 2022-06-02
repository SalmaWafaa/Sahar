<link rel="stylesheet" href="<?php echo URLROOT; ?>css/alert.css">

<?php


class edit_prod extends View
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
    $product=$this->model->getAllProducts();
    $pp=$this->model->getproductsOFS();
    foreach($pp as $prod)
    {
    ?>
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong><?php echo $prod->ProductName;?></strong> is about to be out of stock.
</div>
    <?php } ?>

    <table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>ID</th>
			<th>Product Name</th>
            <th>First Image</th>
            <th>Second Image</th>
            <th>Third Image</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Rate</th>
      <th>Edit/Delete</th>
      <th>Add Offer</th>
		</tr>
    </thead>
       <?php  foreach($product as $x)
        {
    //$action = VIEWS_PATH . 'products/edit_delete_product.php';
            ?>  
        <tr>	
        <td> <?php echo $x->ProductID;?></td>
        <td> <?php echo $x->ProductName;?></td>
        <td><img src="<?php echo ImageRoot . $x->ProductImage ;?>" width="70" height="70" ></td>
        <td><img src="<?php echo ImageRoot . $x->Product_Image2 ;?>" width="70" height="70" ></td>
        <td><img src="<?php echo ImageRoot . $x->Product_Image3 ;?>" width="70" height="70" ></td>
       <td><?php echo $x->Description;?></td> 
       <td><?php echo $x->Quantity;?></td>
       <td><?php echo $x->Price;?></td>
      <td><?php echo $x->Rate;?></td>     
    <td><a href= "<?php echo URLROOT . 'products/edit_delete_product?id='.$x->ProductID; ?>" >Edit/Delete</td>
    <td><a href= "<?php echo URLROOT . 'products/add_offer?id='.$x->ProductID; ?>" >Add Offer</td>

        </tr>
    
    <?php
        }
        ?>       
        </table>
      <?php
      require APPROOT . '/views/inc/footer.php';
  }

}
