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

class EditProfile extends view
{
  public function output()
  {
    $title = $_SESSION['user_id'];

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="bg-warning">
    <div class="container">
      <h1 class="display-4"> <center>$title  </center></h1>
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
    <h2>Edit Profile</h2>
    <form action="$action" method="post" >
EOT;
    echo $text;
   
    $this->printFName();
    $this->printLName();
    $this->printEmail();
    $this->printAddress();
    $this->printMobile();
   ?>
    <div class="container">
      <div class="row mt-4">
        <div class="col-2">
          <input type="submit" value="Edit Profile" class="form-control btn btn-warning btn-block">
        </div>
        <div class="col-2">
        <button class="form-control btn btn-warning btn-block"> <a href="<?php echo URLROOT . 'users/changePass';?>" </a> Change Password </button>
        </div>
        <div class="col-2">
        <input type="button" value="Delete Profile" class="form-control btn btn-danger btn-block"  onclick="document.getElementById('id01').style.display='block'">
        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">??</span>
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

  private function printFName()
  {
    $val = $this->model->getFirstName($_SESSION['user_id']);
    $err = $this->model->getFNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'first_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printLName()
  {
    $val = $this->model->getLastName($_SESSION['user_id']);
    $err = $this->model->getLNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'last_name', $val, $err, $valid,'bi bi-person-circle');
  }
  private function printEmail()
  {
    $val = $this->model->getEm($_SESSION['user_id']);
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid,'bi bi-envelope-fill');
  }

  
 
  private function printAddress()
  {
    $val =$this->model->getAddr($_SESSION['user_id']);
    $err = $this->model->getAddressErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'address', $val, $err, $valid,'bi bi-geo-alt-fill');
  }
  private function printMobile()
  {
    $val =$this->model->getMob($_SESSION['user_id']);
    $err = $this->model->getMobileErr();
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
