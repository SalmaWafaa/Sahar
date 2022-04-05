<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</head>
<body class="bg-light">
    <class>

<?php
class cart extends View
{
  public function output()
  { 
      
    $title = $this->model->title;

    //$title = $this->model->title;


    require APPROOT . '/views/inc/header.php';
    
    
    ?>
    
    

<body>

    <div class="bg-warning">
    <div class="container">
<h1 class="display-4"> <center> My Cart</center></h1>
    </div>
  </div>

  </div>
  </div>
  </div>





 <div class=”Cart-Container”></div>
</body>

<div class=”Header”>
 <h3 class=”Heading”><i class="bi bi-cart3"></i> Preview Your Cart </h3>
 <button type="button" class="btn btn-danger">Your cart is currently empty!</button>
 <button type="button" class="btn btn-info">Continue Shopping</button>
 <button type="button" class="btn btn-warning">Proceed to checkout</button>
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

        
            </table>
        </div>

        

        <?php
    require APPROOT . '/views/inc/footer.php';
    //require APPROOT . '/views/inc/footer.php';
  }
}
?>