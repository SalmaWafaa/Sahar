<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

<?php

class add_color extends view
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
    $action = URLROOT . 'products/add_color';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Add Color</h2>
    <form action="$action" method="post" enctype="multipart/form-data">
EOT;
    echo $text;
    $this->  printColor();
    
    $text = <<<EOT
    
    <div class="container">
      <div class="row mt-4">
        <div class="col-4">
          <center><input type="submit" value=" Add Color " class="form-control btn btn-warning btn-block"></center>
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
    private function printColor()
  {
    $val = $this->model->getColorr();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printInput('text', 'color', $val, $valid,'bi bi-bag-dash-fill');
 
}
 
  private function printInput($type, $fieldName, $val, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
    </div>
    
EOT;
    echo $text;
  }
}
