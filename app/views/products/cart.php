<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<<<<<<< HEAD:app/views/pages/cart.php
kkk
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

=======
>>>>>>> 13e65bcd18a6c60897281e72e11fa20c7947b5fe:app/views/products/cart.php
    <link rel="stylesheet" href="style.css">
  
</head>
<body class="bg-light">
<<<<<<< HEAD:app/views/pages/cart.php
    

=======
>>>>>>> 13e65bcd18a6c60897281e72e11fa20c7947b5fe:app/views/products/cart.php
<?php
class cart extends View
{
  public function output()
  { 
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
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
        <h3 class="title2"><i class="bi bi-cart3"></i> Shopping Cart Details</h3>
        <div class="table-responsive">
        <table class="table-warning">
            <tr>
                <th width="30%">  Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <tr>
                <td width="30%">  car holder</td>
                <td width="10%">1</td>
                <td width="13%">300</td>
                <td width="10%">300</td>
                <td width="17%"><button type="button" class="btn btn-danger">Remove Item</button></td>
            </tr>
            <tr>
                <td width="30%"> Headphones</td>
                <td width="10%">1</td>
                <td width="13%">500</td>
                <td width="10%">800</td>
                <td width="17%"><button type="button" class="btn btn-danger">Remove Item</button></td>
            </tr>
            </table>
        </div>
  </div>
        <?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>