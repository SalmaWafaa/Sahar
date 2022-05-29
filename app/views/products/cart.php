<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  
</head>
<body class="bg-light">
    

<?php
class cart extends View
{
  public function output()
    {
     $title = $this->model->title;
      require APPROOT . '/views/inc/header.php';
      if(!empty($_POST['cart'])) 
     {
		$this->model->productsQuantity=json_decode($_POST['cart'],true);
     }
     if(!empty($_GET["action"])) 
     {
	  switch($_GET["action"]) 
      {
		case "add":
			if(!empty($_POST["quantity"])) {
				$this->model->addProduct($_GET["id"],$_POST["quantity"]);
			}
		break;
		case "remove":
			$this->model->removeProduct($_GET["id"]);
		break;
		case "empty":
			$this->model->emptyCart();	
		break;	
	   }
      if(count($cart->productsQuantity)>0)
      {
		$item_total = 0;
        ?>
        <button type="button" class="btn btn-danger">Your cart is currently empty!</button>
        <?php
      }
     }
  
 
      ?>
      <div class="container">

     <div class="bg-warning">
     <h1 class="display-4"> <center> My Cart</center></h1>
     </div>
     <div class=”Cart-Container”></div>
     <div class=”Header”>
     <h3 class=”Heading”><i class="bi bi-cart3"></i> Preview Your Cart </h3>
     <button type="button" class="btn btn-danger">Your cart is currently empty!</button>
      <button type="button" class="btn btn-info"><a href="<?php echo URLROOT . 'products/shop'; ?>">Continue Shopping</a> </button>
     <button type="button" class="btn btn-warning"><a href="<?php echo URLROOT . 'products/Checkout'; ?>">Proceed to checkout</a></button>
     </div>
 


      <div style="clear: both"></div>
        <div class="table-responsive">
        <tr>
				<th><strong>Name</strong></th>
                <th><strong>Description</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Price</strong></th>
                <th><strong>Rate</strong></th>
				<th><strong>Action</strong></th>
			</tr>	
			<?php	
			foreach ($cart->productsQuantity as $productID => $Quantity)
            {  
				$product=$this->prod($productID);						
				?>
				<tr>
					<td><strong><?php echo $product->ProductName; ?></strong></td>
                    <td><strong><?php echo $product->Description; ?></strong></td>
					<td><?php echo $Quantity; ?></td>
					<td><?php echo "$".$product->Price; ?></td>
                    <td><strong><?php echo $product->Rate; ?></strong></td>
					<td>
						<form method="post" action= "<?php URLROOT . 'products/cart?action=remove&id='.$product->ProductID; ?>">
							<input type="submit" value="Remove Item" class="btnAddAction" />
							<input type='hidden' name='cart' value='<?php echo (json_encode($cart->productsQuantity)); ?>' />
						</form>
					</td>
				</tr>
				<?php
				$item_total += ($product->Price*$Quantity);
			}
			?>
			<tr>
				<td colspan="4"><strong>Total:</strong> 
				<?php 
				echo "$".$item_total; ?></td>
			</tr>
		</table>		
	 <?php
    
     ?>
      </div>
     <?php
	
     require APPROOT . '/views/inc/footer.php';
        
    }
}?>

