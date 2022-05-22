
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
    $e="Edit";
    ?>
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
            <th>Edit</th>
            <th>Delete</th>
		
		</tr>
    </thead>
       <?php  foreach($product as $x)
        {
    $action = VIEWS_PATH . 'products/edit_delete_product.php';

            ?>  
        <tr>	
        <td> <?php echo $x->ProductID;?></td>
        <td> <?php echo $x->ProductName;?></td>
        <td> <?php echo $x->productImage1;?></td>
    <td><?php echo $x->productImage2;?></td> 
    <td><?php echo $x->productImage3;?></td> 
    <td><?php echo $x->Description;?></td> 
    <td><?php echo $x->Quantity;?></td>
    <td><?php echo $x->Price;?></td>
    <td><?php echo $x->Rate;?></td>
     
    <td><a href= "<?php $action ?>" >Edit</td>
    </table>
    <?php
        }
     	
     /* $str.="";
      echo $str;*/
      require APPROOT . '/views/inc/footer.php';
  }

}
