 <html>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/productCSS.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<?php
    class product extends view
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
<body>
<div class="container">
  <div class="row">
    <div class="col-md-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo ImageRoot . 'pic8.jpg' ; ?>" class="d-block w-100" alt="...">
        </div> 
        <div class="carousel-item">
          <img src="<?php echo ImageRoot . 'pic9.jpg' ; ?>" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo ImageRoot . 'pic7.jpg' ; ?>" alt="...">
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
      <div class="col-md- 7 ">
        <p class="newarrival text-center">NEW</p>
        <h2>Men's T shirt dndk</h2>
        <p>Product code:dddddddddddd</p>
        <h5 class="card-title">Power Bank</h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>        <p class="price" >EGP $20</p>
        <p><b> Availability:</b>In stock</p>
        <p><b> Condition:</b></p>
        <label>Quantity:</label>
        <input type="text" value="1">
        <button type="button" class="btn btn-default cart">
          Add to cart</button>


</div>
</div>
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
</body>
</html>