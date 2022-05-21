<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript' src=''></script>
<script type='text/Javascript'></script>
<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleContact.css">
<?php
class Contact extends View
{

  public function output()
  {
    //$title = $this->model->title;

     require APPROOT . '/views/inc/header.php';
     $contact=$this->model->Contact();
    foreach($contact as $con)
     ?>
      <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
      <div class="container">
      <h1 class="display-4">Get in touch </h1>
     </div>
     </div>

     <div class="jumbotron jumbotron-fluid">  
     <div class="container">
      <h3>If you need any Help, simply emal us or just call</h3>
      <div class="info">
      <div class="social-information"> <i class="fa fa-map-marker"></i>
      <?php
     echo $con->Address
      ?>
       </div>
       <div class="social-information"> <i class="fa fa-envelope-o"></i>
       <?php
     echo $con->Mail
      ?>
       </div>
       <div class="social-information"> <i class="fa fa-mobile-phone"></i>
       <?php
     echo $con->Mobile
      ?>
       </div>
       <div class="social-information"> <i class="fa fa-mobile-phone"></i>
       <?php
     echo $con->Telephone
      ?>
       </div>
       </div>
       </div>
       </div>

       <div class="p-3 mb-2 bg-warning bg-gradient text-dark">
	   <div class="contact-info-form"> 
       <div class="container">
       <form action="#" onclick="return false;" autocomplete="off">
     <h3 class="title">Contact us</h3>
     <div class="social-input-containers"> <input type="text" name="name" class="input" placeholder="Name" /> </div>
     <div class="social-input-containers"> <input type="email" name="email" class="input" placeholder="Email" /> </div>
     <div class="social-input-containers"> <input type="tel" name="phone" class="input" placeholder="Phone" /> </div>
    <div class="social-input-containers textarea"> <textarea name="message" class="input" placeholder="Message"></textarea> </div> 
	<input type="submit" value="Send" class="btn btn-inverse btn-secondary" />

     </form>
       </div>
       </div>
       </div>
       </body>
       </div>
       </div>




  
       <?php
       require APPROOT . '/views/inc/footer.php';
  }
  
  private function printUserEmail()
  {
    $val = $this->model->getuserMail();
    $err = $this->model->getuserMailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('userMail', 'userMail', $val, $err, $valid);
  }
  private function printUserID()
  {
    $val = $this->model->getuserID();
    $err = $this->model->getuserID();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('userID', 'userID', $val, $err, $valid);
  }
  private function printSubject()
  {
    $val = $this->model->getSubj();
    $err = $this->model->getSubj();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('Subj', 'Subj', $val, $err, $valid);
  }
  private function printmsg()
  {
    $val = $this->model->getmsg();
    $err = $this->model->getmsg();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('msg', 'msg', $val, $err, $valid);
  }
  private function printInput($type, $fieldName, $val, $err, $valid)
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

?>