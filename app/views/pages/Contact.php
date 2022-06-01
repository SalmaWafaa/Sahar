
<?php
class Contact extends View
{

  public function output()
  {
    //$title = $this->model->title;

     require APPROOT . '/views/inc/header.php';
     $text = <<<EOT
     <div class="p-5 mb-4 bg-warning bg-gradient text-dark">
      <div class="container">
      <h1 class="display-4">Get in touch </h1>
     </div>
     </div>
     EOT;
    echo $text;
     $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }
  private function printForm()
  {
    $action = URLROOT . 'pages/contact';
    $loginUrl = URLROOT . 'pages/Contact Us';
    

    $text = <<<EOT
     
     <form action="$action" method="post">
     EOT;
    echo $text;
    
    $contact=$this->model->Contact();
    foreach($contact as $con){
      ?>
    
            <div class="jumbotron jumbotron-fluid">  
            <div class="container">
           <h3>If you need any Help, simply emal us or just call</h3>
           <div class="info">
           <div class="social-information"> <i class="fa fa-map-marker"></i>
           <?php
           echo $con->Location;
            ?>
            </div>
           <div class="social-information"> <i class="fa fa-envelope-o"></i>
           <?php
           echo $con->Email_Contact;
           ?>
           </div>
           <div class="social-information"> <i class="fa fa-mobile-phone"></i>
           <?php
           echo $con->Mobile_contact;
            ?>
           </div>
           <div class="social-information"> <i class="fa fa-mobile-phone"></i>
           <?php
           echo $con->Store_contact;
     
    
           ?>
           </div>
           </div>
           </div>
           </div>
           <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
             <div class="contact-info-form"> 
           <div class="container">
   <?php 
   }
   
   ?>
           <form action="$action" method="post">
           
           
           <h3 class="title">Contact us</h3>
           <?php
           echo $text;
           $this->printUserEmail();
           $this->printSubject();
           $this->printmsg();
           $text = <<<EOT
           <input type="submit" value="Send" class="btn btn-inverse btn-secondary" />
           </form>
           </div>
           </div>
           </div>
           </body>
           </div>
           </div>
           
           EOT;
           echo $text;
  }
      private function printUserEmail()
     {
      $val = $this->model->getuserMail();
      $err = $this->model->getuserMailErr();
     $valid = (!empty($err) ? 'is-invalid' : '');

     $this->printInput('email', 'Email', $val, $err, $valid);
     }
  private function printSubject()
  {
    $val = $this->model->getSubj();
    $err = $this->model->getSubj();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Subject', $val, $err, $valid);
  }
  private function printmsg()
  {
    $val = $this->model->getmsg();
    $err = $this->model->getmsg();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printTextArea('print_Message', 'Message', $val, $err, $valid);
  }
  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> </i> $label: <sup>*</sup> </label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
    EOT;
    echo $text;
  }
   private function printTextArea($fieldName, $val, $err, $valid)
  {
    
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName">  </label>
      <textarea name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" rows="4" cols="50">
      </textarea>
      <span class="invalid-feedback">$err</span>
    </div>
    
EOT;
    echo $text;
  }
}
?>