<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">

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
    

    $text = <<<EOT
     
     <form action="$action" method="post">
     EOT;
    echo $text;
    
    $contact=$this->model->Contact();
    foreach($contact as $con){
      ?>
    
            <div class="jumbotron jumbotron-fluid">  
            <div class="container">
           <h3>If you need any Help, simply email us or just call</h3>
           <div class="info">
           <div class="social-information"> <i class="fa fa-map-marker"></i>
           <h4><?php
           echo $con->Location;
            ?>
            </div></h4>
           <div class="social-information"> <i class="fa fa-envelope-o"></i>
          <h4> <?php
           echo $con->Email_Contact;
           ?></h4>
           </div>
           <div class="social-information"> <i class="fa fa-mobile-phone"></i>
           <h4><?php
           echo $con->Mobile_contact;
            ?></h4>
           </div>
           <div class="social-information"> <i class="fa fa-mobile-phone"></i>
           <h4><?php
           echo $con->Store_contact;
     
    
           ?></h4>
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
    $err = $this->model->getSubjErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Subject', $val, $err, $valid);
  }
  private function printmsg()
  {
    $val = $this->model->getmsg();
    $err = $this->model->getmsgErr();
    $valid = (!empty($err) ? 'is-invalid' : '');
    
    $this->printInput('text', 'Message', $val, $err, $valid);
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
}
?>