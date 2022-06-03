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
<?php
 $PN=$this->model->getProductCartName($_SESSION['user_id']);
 $c=$this->model->Cartt($_SESSION['user_id']);

 $userID=$_SESSION['user_id'];
 for($i=0;$i<count($PN);$i++){
?>
    <form action="" method="post" class="cart-items">
    <div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-12">
    <div class="border rounded">
        <div class="row bg-white">
            <div class="col-md-3 pl-0">
                <img src=<?php  echo ImageRoot . $this->model->getProductCartImage($_SESSION['user_id'])[$i];?> alt="Image1" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h5 class="pt-2"><?php echo $this->model->getProductCartName($_SESSION['user_id'])[$i];?></h5>
                <h5 class="pt-2"><?php echo $this->model->getProductCartPrice($_SESSION['user_id'])[$i];?></h5>
                <h5 class="pt-2"><?php echo $this->model->getProductCartColor($_SESSION['user_id'])[$i];?></h5>
                <h5 class="pt-2"><?php echo $this->model->getProductCartQuality($_SESSION['user_id'])[$i];?></h5>
                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
            </div>
            <div class="col-md-3 py-5">
                <div>
                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                    <input type="text" value="<?php echo $this->model->getProductCartQuantity($_SESSION['user_id'])[$i];?>" class="form-control w-25 d-inline">
                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
 </div>


<?php
 }
 ?>
 <br>
  <div class="col-md-10 offset-md-1 border rounded mt-7 bg-white h-25">
  <div class="card-body">

<div class="pt-4">
    <div class="row price-details">
        <div class="col-md-6">
            
            <h6>Delivery Charges</h6>
            <hr>
            <h6>Amount Payable</h6>
        </div>
        <div class="col-md-6">
            <h6 class="text-success">30 EGP</h6>
            <hr>
            <h6>EGP<?php
                echo $this->model->TotalCart($_SESSION['user_id'])[0];
                ?></h6>
        </div>
</div>
    </div>
</div>
</div>
</div>
</div>

</div>
 <center>
 <button type="button" class="btn btn-info"><a href="<?php echo URLROOT . 'products/categories'; ?>">Continue Shopping</a> </button>
 <button type="submit" class="btn btn-warning"><a href="<?php echo URLROOT . 'products/Checkout?id='.$c->User_ID; ?>">Proceed to checkout</a></button>
 <button type="submit" class="btn btn-danger" name="del" > Empty Cart</button>

</center>
</form>
</div>
 <?php
    require APPROOT . '/views/inc/footer.php';
      }
    
  }

?>