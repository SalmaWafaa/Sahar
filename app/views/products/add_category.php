<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

<?php

class add_category extends view
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
    $action = URLROOT . 'products/add_category';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Add Category</h2>
    <form action="$action" method="post" enctype="multipart/form-data">
EOT;
    echo $text;
    $this->printCategImage();
    $this->printCategName();
    
    $text = <<<EOT
    
    <div class="container">
      <div class="row mt-4">
        <div class="col-4">
          <center><input type="submit" value=" Add Category " class="form-control btn btn-warning btn-block"></center>
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

  private function printCategImage()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getCategoryImageErr();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printPicture('file', 'Category_Image', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg');
  }
  
  private function printCategName()
  {
    $val = $this->model->getCategoryName();
    $err = $this->model->getCategoryNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Category_Name', $val, $err, $valid,'bi bi-bag-dash-fill');
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
  private function printPicture($type, $fieldName, $err, $valid,$icon,$accept)
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
