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
    $action = URLROOT . 'products/edit_delete_product?id='.$_GET['id'];
    $DeleteProductUrl = URLROOT . 'products/DeleteProducts?id='.$_GET['id'];
    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Edit Product</h2>
    <form action="$action" method="post" enctype='multipart/form-data' >
EOT;
    echo $text;
    $this->printProdName();
    $this->printProdDescr();
    $this->printProdQuantity();
    $this->printProdPrice();
    $this->printProdAbout();
    $this->printProdCondition();
   ?>
    <div class="container">
      <div class="row mt-4">
        <div class="col-1">
          <input type="submit" value="Edit" class="form-control btn btn-warning btn-block">
        </div>
        <div class="col-2">
          <button type="button" value="Edit Images" class="form-control btn btn-warning btn-block"><a href="<?php echo URLROOT . 'products/edit_images?id='.$_GET['id'];?>"> Edit Images</a></button>
        </div>
        <br>
        <div class="col-1">
        <input type="button" value="Delete " class="form-control btn btn-danger btn-block"  onclick="document.getElementById('id01').style.display='block'">
        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">??</span>
  <form class="modal-content" action="<?php $action ?>">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button name='delete' type="submit" class="btn btn-danger"><i class= "fa fa-trash text-danger"></i>Delete</button>
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

  
  private function printProdName()
  {
    $val =$this->model->getPName($_GET['id']);
    $err = $this->model->getProductNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Name', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdAbout()
  {
    $val =$this->model->getPAbout($_GET['id']);
    $err = $this->model->getProductNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printTextArea('Product_About', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdCondition()
  {
    $val =$this->model->getPconditionn($_GET['id']);
    $err = $this->model->getProductNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Condition', $val, $err, $valid,'bi bi-bag-dash-fill');
  }
  private function printProdDescr()
  {
    $val =$this->model->getProductDesc($_GET['id']);
    $err = $this->model->getDescriptionErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Description', $val, $err, $valid,'bi bi-bag-dash-fill');
  }

  private function printProdQuantity()
  {
    $val =$this->model->getProductQuantity($_GET['id']);

    $err = $this->model->getQuantityErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Quantity', $val, $err, $valid,'bi bi-123');
  }
  private function printProdPrice()
  {
    $val =$this->model->getProductPrice($_GET['id']);

    $err = $this->model->getPriceErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Product_Price', $val, $err, $valid,'bi bi-cash');
  }
  private function printTextArea($fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup> </label>
      <textarea name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" rows="10" cols="50">
      $val
      </textarea>
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
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
 
  }

