<style>
  table th{
    color:black;
    background-color:#eca969;
}
</style>
<?php

class ViewOrders extends View
{

  public function output()
  {
    $title = $this->model->title;
    

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"><center> $title</center></h1>
    </div>
  </div>
  <div class="container,table">
	<table class="table table-striped table-bordered table-hover ">
		<thead><tr class="table-warning">
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
	</thead>
    
	<tbody>
  <tr >
    <td> 1</td>
    <td>06F</td>
    <td>1</td>
    <td>new cairo</td>
    <td>4</td>
    <td>credit card</td>
    <td>50</td>
    <td>0100000000</td>
    <td>350</td>
    <td>1/4/2022</td>
  </tr>	
	</tbody>
</table>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
