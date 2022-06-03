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
     
     <div class="p-2 mb-1 bg-warning bg-gradient text-dark">
     <center><h2>Checkout </h2></center>
     </div>
     
     EOT;
     echo $text;
     $this->printForm();
     require APPROOT . '/views/inc/footer.php';
     }
      private function printForm()
        {
          $action = URLROOT . 'products/checkout';

         $text = <<<EOT

            
            EOT;
          echo $text;
         $this->printFName();
         $this->printLName();
         $this->printEmail();
         $this->printAddress();
         $this->printMobile();
         $this->printTotal();

           $text = <<<EOT
           <div class="Regform">
           <div class="row">
           <div class="col-md-12 mx-auto">
           <div class="card card-body bg-light mt-6">
           <form action="$action" method="post">
           <div class="row mt-4">
           <div class="col-2">
           <input type="submit" value="check out" class="form-control btn btn-warning btn-block">
           </div>
           </div>
           </form>
           </div>
           </div>
           </div>
           </div>
           EOT;
         echo $text;
        }

        private function printFName()
        {
         $val = $this->model->getFNamee($_SESSION['user_id']);
          $err = $this->model->getFNameeErr();
         $valid = (!empty($err) ? 'is-invalid' : '');

          $this->printInput('text', 'first_name', $val, $err, $valid);
        }
        private function printTotal()
        {
          ?>
         <h4>Total : <?php  echo $this->model->TotalCart($_SESSION['user_id'])[0];?> 
         <?php
        }
        private function printLName()
        {
          $val = $this->model->getLNamee($_SESSION['user_id']);
          $err = $this->model->getLNameeErr();
         $valid = (!empty($err) ? 'is-invalid' : '');

         $this->printInput('text', 'last_name', $val, $err, $valid);
        }

        private function printEmail()
        {
          $val = $this->model->getEmaill($_SESSION['user_id']);
          $err = $this->model->getEmaillErr();
         $valid = (!empty($err) ? 'is-invalid' : '');

         $this->printInput('email', 'email', $val, $err, $valid);
        }

        private function printAddress()
        {
         $val = $this->model->getaddresss($_SESSION['user_id']);
         $err = $this->model->getaddresssErr();
         $valid = (!empty($err) ? 'is-invalid' : '');

         $this->printInput('text', 'address', $val, $err, $valid);
        }

        private function printMobile()
        {
         $val = $this->model->getmobilee($_SESSION['user_id']);
         $err = $this->model->getmobileeErr();
         $valid = (!empty($err) ? 'is-invalid' : '');

         $this->printInput('text', 'mobile', $val, $err, $valid);
        }

        private function printInput($type, $fieldName, $val, $err, $valid)
        {
          $label = str_replace("_", " ", $fieldName);
          $label = ucwords($label);
          $text = <<<EOT
          <div class="form-group">
          <label for="$fieldName">  $label: <sup>*</sup> </label>
          <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
          <span class="invalid-feedback">$err</span>
          </div>
          EOT;
          echo $text;
        } 
   }

  
     
     