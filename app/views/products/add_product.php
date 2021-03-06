<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

<?php

class add_product extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="bg-warning">
    <div class="container">
      <h1 class="display-4"> <center>$title</center></h1>
    </div>
  </div>

  </div>
  </div>
  </div>
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'products/add_product';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Add Product</h2>
    <form action="$action" method="post" enctype="multipart/form-data">
EOT;
    echo $text;
    $this->printProdImage1();
    $this->printProdImage2();
    $this->printProdImage3();
    $this->printProdName();
    $this->printProdDescr();
    $this->printProdAbout();
    $this->printProdCondition();
    $this->printProdQuantity();
    $this->printRadio();
    $this->printColor();
    $this->printQuality();
    $this->printProdPrice();
    $text = <<<EOT
    
    <div class="container">
      <div class="row mt-4">
        <div class="col-4">
          <center><input type="submit" value="Add Product" class="form-control btn btn-warning btn-block"></center>
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printProdImage1()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getimg1Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printPictures('file', 'Product_Image_1', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg');
  }
  private function printProdImage2()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getimg2Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printPictures('file', 'Product_Image_2', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg');
  }
  private function printProdImage3()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getimg3Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printPictures('file', 'Product_Image_3', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg');
  }
  private function printProdName()
  {
    $val = $this->model->getProductName();
    $err = $this->model->getProductNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Name', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdDescr()
  {
    $val = $this->model->getDescription();
    $err = $this->model->getDescriptionErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Description', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdAbout()
  {
    $val = $this->model->getAbout();
    $err = $this->model->getAboutErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printTextArea('Product_About', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdCondition()
  {
    $val = $this->model->getPCondition();
    $err = $this->model->getPConditionErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Condition', $val, $err, $valid,'bi bi-bag-dash-fill');
  }

  private function printProdQuantity()
  {
    $val = $this->model->getQuantity();
    $err = $this->model->getQuantityErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Quantity', $val, $err, $valid,'bi bi-123');
  }
  private function printProdPrice()
  {
    $val = $this->model->getPrice();
    $err = $this->model->getPriceErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Price', $val, $err, $valid,'bi bi-cash');
  }
  private function printRadio(){
    ?>
    <div class="form-group">
    <label for="q1"> Category: <sup>*</sup> </label>
    <br>
    <?php 
    $categ=$this->model->getCategs();
    foreach ($categ as $c){
      ?>
    <input type="radio" name="q1" value="<?php echo $c->catID ;?>" />
    <?php echo $c->CatName ; ?> <br>
   
    <?php
    }
    ?>
    <input type="radio" name="q1" value="<?php echo $this->model->countID()+1 ;?>" />
    <a href= "<?php echo URLROOT . 'products/add_category' ; ?>"> + Add new Category </a> <br>
    </div>
   
  <?php
  }
  private function printQuality(){
    ?>
    <div class="form-group">
    <label for="c1[]"> Quality: <sup>*</sup> </label>
    <br>
    <?php 
    $Quality=$this->model->getQualties();
    foreach ($Quality as $q){
      ?>
    <input type="checkbox" name="c1[]" value="<?php echo $q->Quality_ID ;?>" />
    <?php echo $q->value ; ?>
    
    <?php
    }
    ?>
    </div>
    <?php
  }
  private function printColor(){
    ?>
    <div class="form-group">
    <label for="c1"> Color: <sup>*</sup> </label>
    <br>
    <?php 
    $color=$this->model->getColors();
    foreach ($color as $co){
      ?>
    <input type="checkbox" name="c2[]" value="<?php echo $co->cID ;?>" />
    <?php echo $co->color ; ?> <br>
    <?php
    }
    ?>
    <input type="checkbox" name="c2[]" value="<?php echo $this->model->countColorID()+1 ;?>" />
    <a href= "<?php echo URLROOT . 'products/add_color' ; ?>"> + Add new Color </a> <br>
    </div>
   
  <?php
  }
  
  private function printInput($type, $fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
  }
  private function printTextArea($fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <textarea name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" rows="4" cols="50">
      </textarea>
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
  }
  private function printPictures($type, $fieldName, $err, $valid,$icon,$accept)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" accept="$accept">
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
  }
}
