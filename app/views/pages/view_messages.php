<style>
  table th{
    color:black;
    background-color:#eca969;
}
</style>
<?php

class view_messages extends View
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
    $msgs=$this->model->view_messages();
    $str="<table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>ID</th>
			<th>Date</th>
			<th>User Email</th>
			<th>User ID</th>
			<th>Subject ID</th>
			<th>Message</th>
      </tr>
    	</thead>";
      foreach($msgs as $m)
      $str.="<tr><td>".$m->Id."</td>
      <td>".$m->dateSent."</td>
      <td>".$m->UserEmail."</td>
      <td>".$m->UserID."</td> 
      <td>".$m->Subject."</td>
      <td>".$m->Message."<</td></tr>";;
     $str.="</table> </div>";
     echo $str;
     require APPROOT . '/views/inc/footer.php';
  }
}
