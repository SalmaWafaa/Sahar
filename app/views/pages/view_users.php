
<?php


class view_users extends View
{

  public function output()
  {
    $title = $this->model->title;
    

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="bg-warning">
    <div class="container">
      <h1 class="display-4"><center> $title</center></h1>
    </div>
  </div>
 
EOT;
    echo $text;
    $user=$this->model->getAllUsers();
    $str="<table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone Number</th>
		
		</tr>
    </thead>";
        foreach($user as $x)
          $str.="<tr><td>".$x->ID."</td><td>".$x->FirstName."</td><td>".$x->LastName."</td><td>".$x->Email."</td><td>".$x->Address."</td><td>".$x->Mobile."</td></tr>";
      //var_dump($Ent[0]->Name);	
    $str.="</table>";
      echo $str;
      require APPROOT . '/views/inc/footer.php';
  }

}
