
<?php
class About extends view
{

  public function output()
  {
    //$title = $this->model->title;
    

    require APPROOT . '/views/inc/header.php';
    $about=$this->model->About();
    foreach($about as $abt)
    
   
    ?>
    
    <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
    <div class="container">
      <h1 class="display-4"> About Us </h1>
     
    </div>
  </div>
  
 
  <div class="jumbotron jumbotron-fluid">  
  <div class="container">
      <h1 class="display-4"  > WHO WE ARE</h1>
      <?php
     echo $abt->WhoWeAre
      ?>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid">  
    <div class="container">
        <h1 class="display-4"> Mission</h1>
        <?php
         echo $abt->Mission
    
      ?>
        <img src="<?php echo ImageRoot . 'mission.jpg' ; ?>" class="d-block w-100" alt="...">
      </div>
      </div>
      <div class="jumbotron jumbotron-fluid">  
    <div class="container">
        <h1 class="display-4" > Vision</h1>
        <img src="<?php echo ImageRoot . 'vison.jpg' ; ?>" class="d-block w-100" alt="...">
      </div>
      </div>
   
   
 
 
<?php
  
    require APPROOT . '/views/inc/footer.php';
  }
}
?>