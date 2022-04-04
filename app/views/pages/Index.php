<?php
class Index extends View
{
  public function output()
  {
    //$title = $this->model->title;
    //$subtitle = $this->model->subtitle;
    //$user_id = $_SESSION['user_id'];
    //$user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
   ?>
 
 <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
<h2><center>What we do</center></h2>
  </div>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
 
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <center><img src="<?php echo ImageRoot . 'Pic1.jpg' ; ?> " alt="Los Angeles" class="d-block" style="width:80%"></center>
      <div class="container-fluid mt-3">
  <center><h3>Mobile Phone Accessories</h3></center>
  <center><p>Sa7-R Quick Care offering an extremely wide range of the best telecommunications & Accessories products,
     having expert and dedicated team always ready to be at your service.</p></center>
</div>
    </div>
    
    <div class="carousel-item">
     <center><img src="<?php echo ImageRoot . 'pic3.jpg' ; ?>  "class="d-block" style="width:80%"></center>
      <div class="container-fluid mt-3">
      <center><h3>Mobile Phone Accessories</h3></center>
  <center><p>Sa7-R Quick Care offering an extremely wide range of the best telecommunications & Accessories products,
     having expert and dedicated team always ready to be at your service.</p></center>
</div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
   <span class="carousel-control-next-icon"></span>
  </button>
</div>
<div class="p-3 mb-2 bg-warning bg-gradient text-dark">
<h2><center>New Arrival</center></h2>
  </div>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
  
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
  
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
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