<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
class gallery extends view{
    
    public function output()
  {
    $pic=$this->model->getAllPics();
    $title = $this->model->title;
    //$data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    
   // $text = <<<EOT
   ?>
    <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
    <div class="container">
      <h1 class="display-4"> <center><?php echo $title; ?></center></h1>
      
    </div>
  </div>
  
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
      <?php 
      foreach($pic as $x){
        ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php $x ?>"></button>
    <?php 
      }
      ?>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo ImageRoot . 'SQ1.jpg' ; ?> " alt="" class="d-block" style="width:100%">
    </div>
    <?php 
     foreach($pic as $x){
        ?>
    <div class="carousel-item">
      <img src="<?php echo ImageRoot . $x->PicName ; ?> " alt="" class="d-block" style="width:100%">
    </div>
   <?php } ?>
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
//EOT;
   // echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
?>
  