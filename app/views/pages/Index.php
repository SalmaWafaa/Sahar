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
 
  
<h2><center>What we do</center></h2>
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
  <?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>