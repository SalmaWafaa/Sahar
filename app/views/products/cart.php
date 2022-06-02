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
    function cartElement($productimg, $productname, $productprice, $productid){
        $element = "
        
        <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                        <div class=\"border rounded\">
                            <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">$productname</h5>
                                    <small class=\"text-secondary\">Seller: dailytuition</small>
                                    <h5 class=\"pt-2\">$$productprice</h5>
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                                <div class=\"col-md-3 py-5\">
                                    <div>
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        
        ";
        echo  $element;
    }
  public function output()
  { 
      
    $title = $this->model->title;

    //$title = $this->model->title;


    require APPROOT . '/views/inc/header.php';
    
    
    ?>
    
    

<body>
<?php
 $PN=$this->model->getProductCartName($_SESSION['user_id']);
 $userID=$_SESSION['user_id'];
 for($i=0;$i<count($PN);$i++){
?>
    <form action="cart.php?action=remove&id=$productid" method="post" class="cart-items">
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
</form>

<?php
 }
    require APPROOT . '/views/inc/footer.php';
    //require APPROOT . '/views/inc/footer.php';
  }
}
?>