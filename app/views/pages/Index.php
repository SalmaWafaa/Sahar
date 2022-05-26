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
   <div
  class="bg-image d-flex justify-content-center align-items-center"
  style="
    background-image: url('<?php echo ImageRoot . 'Bd.jpg' ; ?> ');
    height: 100vh;
  "
>
  <h1 class="text-white">Welcome To Sahar Quick Care Mobile Services</h1>
</div>
   <br>
 



 <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
 
<h2><center>What we do</center></h2>
  </div>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
 
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <center><img src="<?php echo ImageRoot . 'Pic1.jpg' ; ?> " class="d-block" style="width:80%"></center>
      <div class="container-fluid mt-3">
  <center><h2>Mobile Phone Repair</h2></center>
  <center><h5>At Sa7a-r Quick Care Fix Your Phone in Minutes , Replace Battery , Replace LCD and Much Much More.</h5></center>
</div>
    </div>
    
    <div class="carousel-item">
     <center><img src="<?php echo ImageRoot . 'pic3.jpg' ; ?>  "class="d-block" style="width:80%"></center>
      <div class="container-fluid mt-3">
      <center><h2>Mobile Phone Accessories</h2></center>
  <center><h5>Sa7-R Quick Care offering an extremely wide range of the best telecommunications & Accessories products,
     having expert and dedicated team always ready to be at your service.</h5></center>
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
<h2><center>OUR DEALS</center></h2>
  </div>
<div id="line2" class="col-lg-20">
    <div class="row">
      <div class="col-sm-8">
        <div class="cofounder-ceo-image">
        <img src="<?php echo ImageRoot . 'Repair.jpg' ; ?>  "class="d-block" style="width:80%">
        </div>
      </div>
      <div class="col-sm-4"> 
         <br>
        <h2> Hurry Up!
           Deal of the Month!</h2>
<br>
        <p>Fix Your Iphone battery With 25% Discount.</p>
        <center><button type="button" class="btn btn-warning"><a href="<?php echo URLROOT . 'products/offers';   ?>
        ">Shop <i class="bi bi-cart"></i> </a></button></center>
      </div>
    </div>
  </div>
   <br>




<div class="p-3 mb-2 bg-warning bg-gradient text-dark">
<h2><center>New Arrival</center></h2>
  </div>
<?php
$products= $this->model->newarrival();
foreach ($products as $f)
{?>
  <div class="row row-cols-2 row-cols-md-4">
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
      <img src="<?php echo ImageRoot . $f->ProductImage ; ?>" alt="Image1" class="card-img-top" >
</div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $f->ProductName;?></h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"><?php echo $f->Description;?> 
                              </p>
                              <h5>
                              <small><s class="text-secondary"><?php echo $f->Price;?></s></small>
                               <span class="price"><?php echo $f->Price;?></span>
                              </h5>
                              <button type="submit" class="btn btn-warning my-3" name="add">Buy Now<i class="bi bi-cart4"></i></button>
                               <input type='hidden' name='product_id' value='1'>
      </div>
</form>
    </div>
<?php
}
?>
  </div>

  </div>
  <?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>