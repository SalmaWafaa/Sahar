
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/shopCSS.CSS">
<?php
    class shop extends view
{
  public function output()
  {
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';

    $text = <<<EOT
    <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
    <div class="container">
      <h1><center> $title</center></h1>     
  </div>
  </div>
EOT;
    echo $text;
    $this->CatShop();
    require APPROOT . '/views/inc/footer.php';
  }
    public function CatShop(){
    $product=$this->model->getCategoryProducts($_GET['cid']);
       ?>
       <div class="row row-cols-2 row-cols-md-4">
         <?php
   foreach($product as $p){?>
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
    <a href="<?php echo URLROOT . "products/product?id=$p->ProductID&cid=$p->Cat_ID";?>">
      <img src="<?php echo ImageRoot.$p->ProductImage ; ?>" alt="Image1" class="card-img-top"  >
</div>
   </a>
   
      <div class="card-body">
        <h5 class="card-title"><?php echo $p->ProductName;?></h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> <?php echo $p->Description ;?>
                              </p>
                              <h5>
                              <small><s class="text-secondary">419 EGP</s></small>
                               <span class="price"> <?php echo $p->Price;?> EGP</span>
                              </h5>
                              <button type="submit" class="btn btn-warning" name="add">Add to Cart <i class="bi bi-cart4"></i></a></button>
                               <input type='hidden' name='product_id' value='<?php  $p->ProductID;?>'>
      </div>
</form>
   </div>
   
  <?php 
  }

  ?>
  </div>
  <?php
    }
  }

?>



</body>
</html>
