 <html>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/productCSS.css">
<?php
require_once 'shop.php';
//require_once 'IndexModel.php';

    class product extends shop
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
    $prod=$this->model->getProduct($_GET['id']);
    ?>
    <div class="container">
<div class="row row-cols-2 row-cols-md-8">
  <?php
  foreach($prod as $p){
  ?>
  <div class="col mb-4">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo ImageRoot . $p->ProductImage ; ?>" class="d-block w-100" alt="...">
        </div> 
        <div class="carousel-item">
          <img src="<?php echo ImageRoot . $p->Product_Image2 ; ?>" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo ImageRoot . $p->Product_Image3 ; ?>" alt="...">
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
    <?php
//$Indexmodel = new IndexModel();
$products= $this->model->newarrival();
foreach ($products as $f){
if($_GET['id'] == $f->ProductID){?>
  <center><p class="newarrival text-center">NEW</p></center>
<?php
}
}
?>

        <h2><?php echo $p->Description; ?></h2>
        <p>Product code:<?php echo $p->ProductID; ?></p>
        <h5 class="card-title"><?php echo $p->ProductName; ?></h5>
        
        <h6>
          <div class=" stars">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
  </div>
        </h6>        <p class="price" ><?php echo $p->Price; ?> EGP</p>
        <p><b> Availability:</b>
        <?php 
        $q=$this->model->InStock($_GET['id']);
        if($q == 0){
          echo "<p>Sold out</p>";
        }
        elseif($q > 0){
          echo "<p>In Stock</p>";
        }
        ?>
        </p>
        <p><b> Condition:<?php echo $p->PCondition; ?></b></p>
        <label>Quantity:</label>
        <input type="text" value="1">
        <br>
        <div>
    <label for="c1"> Color: <sup>*</sup> </label>
    <br>
    <?php 
    $color=$this->model->getColors();
    foreach ($color as $co){
      ?>
    <input type="checkbox" name="c2[]" value="<?php echo $co->cID ;?>" />
    <h4><?php echo $co->color ; ?> </h4><br>
    <?php
    }
    ?>
    </div>
        <br>
        <button class="btn btn-warning" type="submit"><a href="<?php echo URLROOT . 'products/cart?pid='.$p->ProductID; ?>">Add to cart</button>
        <button class="btn btn-warning"> <a href="<?php echo URLROOT . 'products/review'; ?>" >Add Review</a></button>


        <br>
        <br>
    </div>
  </div>

  <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
  <center><h2>About This Item</h2></center>
  </div>
  <p><?php echo $p->About; ?></p>
   <?php
   }
  ?>
  <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
  <center><h2>Related Items</h2></center>
  </div>
  <?php 
  $this->CatShop();
  ?>
</div>
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
</body>
</html>
