<link rel="stylesheet" href="<?php echo URLROOT; ?>css/shopCSS.CSS">
<?php
    class offers extends view
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
    $Offers=$this->model->view_offers();
       ?>
       <div class="row row-cols-2 row-cols-md-4">
         <?php
   foreach($Offers as $p)
   {?>
  <div class="col mb-4">
      <form action="" method="post">   
        
      <div class="card-body">
        <h5 class="card-title"><?php echo $p->ProductName;?></h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> <?php echo $p->OfferDescription ;?>
                              </p>
                              <h5>
                              <small><s class="text-secondary"> <?php echo $p->Old_Price;?></s></small>
                               <span class="price"> <?php echo $p->New_Price;?> EGP</span>
                              </h5>
                              <button class="btn btn-warning" type="submit"><a href="<?php echo URLROOT . 'products/cart?action=add&pid='.$p->ProductID; ?>">Add to cart</button><a>
                               <input type='hidden' name='product_id' value='<?php  $p->ProductID;?>'>
      </div>
</form>
   </div>
  <?php 
}
?>
</div>
  
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>



</body>
</html>
