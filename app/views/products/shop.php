
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/shopCSS.CSS">
<?php
class shop extends view
{
  public function output()
  {
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="container">
      <h1 class="display-4"><center> $title</center></h1>     
  </div>
EOT;
    echo $text;
    ?>
 <div class="row row-cols-2 row-cols-md-4">
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic4.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Power Bank</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> JOWAY Power Bank 10000mAh jp221.
                              </p>
                              <h5>
                              <small><s class="text-secondary">419 EGP</s></small>
                               <span class="price">$$productprice</span>
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
                                  <span class="price">$$productprice</span>
                              </h5>
  
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>

  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic5.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">HEAD PHONE</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                 <p class="card-text"> JBL Harman Pure Bass Sound Tune500bt.
                              </p>
                              <h5>
                                  <small><s class="text-secondary">280 EGP</s></small>
                                  <span class="price">$$productprice</span>
                              </h5>
  
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic6.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Charger</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text"> JOYROOM 2USB Travel Charger L-M226.
                              </p>
                              <h5>
                                  <small><s class="text-secondary">160 EGP</s></small>
                                  <span class="price">$$productprice</span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>  

  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic7.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title">Charger</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text"> XO Adaptor Traveler Quick Charger L67.
                              </p>
                              <h5>
                                  <small><s class="text-secondary">220 EGP</s></small>
                                  <span class="price">$$productprice</span>
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
        <h5 class="card-title">  IPhone Back Glass</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text"> Back Glass IPhone 11 Pro Max.
                              </p>
                              <h5>
                                  <small>100 EGP</small>
                                  <span class="price">$$productprice</span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
  </div>
<div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic9.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
  <div class="card-body">
        <h5 class="card-title">  IPhone Back Glass</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text"> Back Glass IPhone 12.
                              </p>
                              <h5>
                                  <small><s class="text-secondary">130 EGP</s></small>
                                  <span class="price">$$productprice</span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
  </form>

  </div>
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic10.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
  <div class="card-body">
        <h5 class="card-title">Flash Memory</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text">ADATA UV260 32 GB Flash memory.
                              </p>
                              <h5>
                                  <small><s class="text-secondary">230 EGP</s></small>
                                  <span class="price">$$productprice</span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
  </form>

  </div>
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . 'pic11.jpg' ; ?>" alt="Image1" class="card-img-top" >
</div>
  <div class="card-body">
        <h5 class="card-title">Flash Memory</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
                          <p class="card-text">HIKVISION M200 FLASH MEMORY 8GB.
                              </p>
                              <h5>
                                  <small> $150</small>
                                  <span class="price">$$productprice</span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
  </form>
  </div>

  </div>
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>



</body>
</html>