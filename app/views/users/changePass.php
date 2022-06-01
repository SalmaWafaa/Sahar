<link rel="stylesheet" href="<?php echo URLROOT; ?>css/styleLoginReg.css">
<script type="text/javascript">
	function showpass() {
  var x = document.getElementById("passs");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php

class changePass extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    flash('register_success');
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
    $action = URLROOT . 'users/changePass';
    $text = <<<EOT
    <div class="Regform">
    <div class="row">
    <div class="col-md-12 mx-auto">
    <div class="card card-body bg-light mt-6">
    <h2>Change password</h2>
    <form action="$action" method="post">
EOT;

    echo $text;
    $this->printOldPassword();
    $this->printNewPassword();
    $this->printNewCPassword();

    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col-4">
          <input type="submit" value="Change Password" class="form-control btn btn-warning btn-block">
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
  private function printOldPassword()
  {
    $val = $this->model->getOldPass();
    $err = $this->model->getOldPassErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'Old_Password', $val, $err, $valid,'bi bi-lock-fill');
  }
  private function printNewPassword()
  {
    $val = $this->model->getNewPass();
    $err = $this->model->getNewPassErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid,'bi bi-lock-fill');
  }
  private function printNewCPassword()
  {
    $val = $this->model->getNewCPass();
    $err = $this->model->getNewCPassErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid,'bi bi-lock-fill');
  }
  private function printInput($type, $fieldName, $val, $err, $valid,$icon)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> <i class="$icon"></i> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" required="">
      
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
