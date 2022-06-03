<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

<?php

class edit_images extends view
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
    $action = URLROOT . 'products/edit_images?id='.$_GET['id'];

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Edit Images</h2>
    <form action="$action" method="post" enctype='multipart/form-data' >
EOT;
    echo $text;
    $this->printProdImage1();
    $this->printProdImage2();
    $this->printProdImage3();
   ?>
    <div class="container">
      <div class="row mt-3">
        <div class="col-4">
          <input type="submit" value="Edit Product" class="form-control btn btn-warning btn-block">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
<?php
  }

  private function printProdImage1()
  {
    //$val = $this->model->getProductimg1($_GET['id']);
    $err = $this->model->getimg1Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . $this->model->getProductimg1($_GET['id']);
    $this->printPictures('file', 'Product_Image', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printProdImage2()
  {
    //$val = $this->model->getProductimg2($_GET['id']);
    $err = $this->model->getimg2Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . $this->model->getProductimg2($_GET['id']);
    $this->printPictures('file', 'Product_Image2', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printProdImage3()
  {
    //$val = $this->model->getProductimg3($_GET['id']);
    $err = $this->model->getimg3Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . $this->model->getProductimg3($_GET['id']);
    $this->printPictures('file', 'Product_Image3', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printPictures($type, $fieldName, $err, $valid,$icon,$accept, $url)
  {
     
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text ="
    <div class='form-group'>
      <label for='$fieldName'> <i class='$icon'></i> $label: <sup>*</sup> </label>"
      ;
      ?><img src="<?php echo $url;?> " width="100" height="100">
      <?php
      $text.="<input type='$type' name='$fieldName' class='form-control form-control-lg $valid' id='$fieldName' accept='$accept'>
      <span class='invalid-feedback'>$err</span>
    </div>";
    

    echo $text;
  }
}