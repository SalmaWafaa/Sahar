<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo URLROOT; ?>css/StyleCheckout.css">
    <?php

    class Checkout extends View
    {
	   public function output()
     {
		$title=$this->model->title;
		require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
		
     <body>
     <main>
     <div class="container">
     <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
     <center><h2>Checkout </h2></center>
     </div>
     EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }
  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT

     <div class="row">
     <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4> <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <hr class="mb-4">
        <button class="btn btn-warning" type="submit">Place Order </button>
          </div>
        </div>
      </form>
     </div>
      EOT;
    echo $text;
    $this->printFName();
    $this->printLName();
    $this->printEmail();
    $this->printAddress();
    $this->printMobile();
    $text = <<<EOT
  }
  private function printFName()
  {
    $val = $this->model->getFName();
    $err = $this->model->getFNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'first_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printLName()
  {
    $val = $this->model->getLName();
    $err = $this->model->getLNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'last_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid,'bi bi-envelope-fill');
  }
  private function printAddress()
  {
    $val = $this->model->getaddress();
    $err = $this->model->getaddressErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'address', $val, $err, $valid,'bi bi-geo-alt-fill');
  }
  private function printMobile()
  {
    $val = $this->model->getmobile();
    $err = $this->model->getmobile();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'mobile', $val, $err, $valid,'bi bi-phone-fill');
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
  
     
     