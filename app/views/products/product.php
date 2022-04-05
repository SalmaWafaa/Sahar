 <html>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/productCSS.css">
<?php
    class product extends view
{
  public function output()
  {
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';

    $text = <<<EOT
    <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
        <h1 class="display-4"><center> $title</center></h1>     
  </div>
EOT;
    echo $text;
    ?>
    <div class="container">
<div class="row row-cols-2 row-cols-md-8">
  <div class="col mb-4">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo ImageRoot . 'carHolder.jpg' ; ?>" class="d-block w-100" alt="...">
        </div> 
        <div class="carousel-item">
          <img src="<?php echo ImageRoot . 'shop1.jpg' ; ?>" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo ImageRoot . 'shop2.jpg' ; ?>" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-contr  ol-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>       
    </div>   
    </div>
  <div class="col mb-4">
     <center><p class="newarrival text-center">NEW</p></center>

        <h2>POWREOLOGY Car Mount Wireless Charger</h2>
        <p>Product code:11025</p>
        <h5 class="card-title">Car Holder</h5>
        
        <h6>
          <div class=" stars">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
  </div>
        </h6>        <p class="price" >EGP 20</p>
        <p><b> Availability:</b>In stock</p>
        <p><b> Condition:STRONG AND GENTLE AUTOMATIC CLAMPING MOTION</b></p>
        <label>Quantity:</label>
        <input type="text" value="1">
        <br>
        <br>
        <button class="btn btn-warning" type="submit"><a href="<?php echo URLROOT . 'products/cart'; ?>">Add to cart</button>
        <button class="btn btn-warning"> <a href="<?php echo URLROOT . 'products/review'; ?>" >Add Review</a></button>


        <br>
        <br>
    </div>
  </div>

  <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
  <center><h2>About This Item</h2></center>
  </div>
  <p>【ARMS ALIVE ON TURN OFF STATUS】 Normally when the power is gone, 
    automatic clamping mount is not working.But REDBEAN Charger has built-in
     capacitor in it so even if your car’s power is gone, It makes clamping
      mount still stays working, It means you can just touch the button and
       when the arms are unlocked, you can pick up the phoone! You may feel
        not easy to find this SPECIAL function out of 15W wireless car chargers. 
        That’s the reason you can take this!
【ANY MOUNTING WITH 360 FREE ROTATING】 REDBEAN wireless car charger comes with an
 air vent mount as well as a dashboard windshield mount. It can be installed on a 
 vent, windshield, dash board, table securely anywhere that you prefer. What’s more,
  the fully 360-degree rotating joint ball enables you to set a comfortable view while 
  driving by supporting landscape and portrait orientations. For the GPS situation, horizontal
   view would be better than vertical one.</p>
   
  <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
  <center><h2>Related Items</h2></center>
  </div>
  <div class="row row-cols-2 row-cols-md-3">
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'shop9.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Car Holder</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> Yesido Free Stretch Holder C23
.
                              </p>
                              <h5>
                              <small>500 EGP</small>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>
    <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'shop.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Car Holder</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> Yesido Hidden Wing C86
.
                              </p>
                              <h5>
                              <small>419 EGP</small>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic8.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Car Holder</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> POWREOLOGY Car Mount Wireless Charger.
                              </p>
                              <h5>
                                  <small>212 EGP</small>
                              </h5>
  
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>
    </div>
  </div>
<?php

    require APPROOT . '/views/inc/footer.php';
  }
}
?>
</body>
</html>