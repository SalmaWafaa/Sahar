<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/delete_confirm.css">

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php

class edit_delete_product extends view
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
    $action = URLROOT . 'users/editprofile';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Edit Product</h2>
    <form action="$action" method="post" >
EOT;
    echo $text;
    $this->printProdImage1();
    $this->printProdImage2();
    $this->printProdImage3();
    $this->printProdName();
    $this->printProdDescr();
    $this->printProdQuantity();
    $this->printProdPrice();
   ?>
    <div class="container">
      <div class="row mt-4">
        <div class="col-2">
          <input type="submit" value="Edit Profile" class="form-control btn btn-warning btn-block">
        </div>
        <div class="col-2">
        <input type="button" value="Delete Profile" class="form-control btn btn-danger btn-block"  onclick="document.getElementById('id01').style.display='block'">
        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="<?php $action ?>">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>
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
    //$val = $this->model->getimg();
    $err = $this->model->getimg1Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . 'H1.jpg';
    $this->printPictures('file', 'Product_Image', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printProdImage2()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getimg2Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . 'H2.jpg';
    $this->printPictures('file', 'Product_Image', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printProdImage3()
  {
    //$val = $this->model->getimg();
    $err = $this->model->getimg3Err();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $url=ImageRoot . 'H3.jpg';
    $this->printPictures('file', 'Product_Image', $err, $valid,'bi bi-images','image/png, image/gif, image/jpeg',$url);
  }
  private function printProdName()
  {
    $val ="HeadPhone";
    $err = $this->model->getProductNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Name', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdDescr()
  {
    $val = "it's in black color";
    $err = $this->model->getDescriptionErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Description', $val, $err, $valid,'bi bi-bag-dash-fill');
  }

  private function printProdQuantity()
  {
    $val = "60";
    $err = $this->model->getQuantityErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Quantity', $val, $err, $valid,'bi bi-123');
  }
  private function printProdPrice()
  {
    $val ="200 EGP";
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

