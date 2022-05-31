<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

<?php

class summary extends view
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
    $action = URLROOT . 'products/categories';

    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <form action="$action" method="post" enctype="multipart/form-data">
EOT;
    echo $text;
    $this->printMessage();
    $this->printOrderInfo();
   
    $text = <<<EOT
    
    <div class="container">
      <div class="row mt-4">
        <div class="col-4">
          <center><input type="submit" value="Continue shopping" class="form-control btn btn-warning btn-block"></center>
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
  private function printMessage()
  {
    ?>
    <h1> Thank you! </h1>
    <h5> Your order has been placed successfully.</h5>
    <?php
  }
  public function printOrderInfo()
  {
  $order= $this->model->orderSummary($_SESSION['user_id']);
  $p=$this->model->orderProduct($order->productID);
    ?>
    <h4>Order number</h4>
    <h6><?php echo $order->orderNumb ; ?></h6>
    <h4>Order Address</h4>
    <h6><?php echo $order->Address ; ?></h6>
    <h4>Order shipping fees</h4>
    <h6><?php echo $order->shippingFees ; ?></h6>
    <h4>Order Total</h4>
    <h6><?php echo $order->Total ; ?></h6>
    <h4>Order Mobile Number</h4>
    <h6><?php echo $order->MobileNumb ; ?></h6>
   <?php 
   //foreach($p as $PP){?>
    <h4>Order Product Name</h4>
    <h6><?php echo $p->ProductName ; ?></h6>

  <?php
   //}
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
