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
    $this->printProdQuantity();
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
