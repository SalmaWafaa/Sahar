<?php
class categories extends view{
    public function image($name){


    }
    public function output()
  {
    $title = $this->model->title;
    
    require APPROOT . '/views/inc/header.php';
    $category=$this->model->getAllCategories();
   

   ?>
<div class="p-3 mb-2 bg-warning bg-gradient text-dark">
     
          <div class="container">
      <h1 class="display-4"> <center><?php echo $title; ?></center></h1>
      
    </div>
  </div>
  

  <div class="row">
  <?php 
      foreach($category as $c){?>
     <div class="col-md-4">
      <div class="thumbnail">
            <img src="<?php echo ImageRoot . $c->CatImage ; ?>" style="width:100%"class="img-rounded">
            <button class="semi-transparent-button"> <a href="<?php echo URLROOT . 'products/shop?id='.$c->catID; ?>" ><?php echo $c->CatName ?></a> </button>
        
      </div>
  </div>
      <?php } ?>
     

    </div>

<?php

    require APPROOT . '/views/inc/footer.php';
  }
}
?>
