<style>
  table th{
    color:black;
    background-color:#eca969;
}
</style>
<?php

class view_order extends View
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
    $orders=$this->model->view_order();
    $str="<table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>Order Number</th>
			<th>Product ID</th>
			<th>Quantity</th>
			<th>Address</th>
			<th>Client ID</th>
			<th>Payment Type</th>
      <th>Shipping Fees</th>
      <th>Mobile Number</th>
      <th>Total</th>
      <th>Date</th>
      </tr>
    	</thead>";
      foreach($orders as $o)
      $str.="<tr><td>".$o->orderNumb."</td>
             <td>".$o->productID."</td>
             <td>".$o->Quantity."</td>
             <td>".$o->Address."</td> 
             <td>".$o->IDofClient."</td>
             <td>".$o->paymentType."</td>
             <td>".$o->shippingFees."</td>
             <td>".$o->MobileNumb."</td>
             <td>".$o->Total."</td>
             <td>".$o->Date."</td></tr>";
   //var_dump($Ent[0]->Name);	
   $str.="</table> </div>";
   echo $str;
    require APPROOT . '/views/inc/footer.php';
  }
}
