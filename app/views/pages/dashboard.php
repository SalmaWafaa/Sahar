<link rel="stylesheet" href="<?php echo URLROOT; ?>css/dashboard.css">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
    <title>Admin Panel</title>
</head>
<?php
class dashboard extends view{
    
    
    public function output()
  {
    $title = $this->model->title;
    $viewPath= VIEWS_PATH . 'pages/view_users.php';

    $messages=$this->model->Msg();
    foreach($messages as $msg)
   ?>
   

<body>
    <div class="side-menu">
        <ul>
            <li><i class="bi bi-speedometer2"></i><a href="<?php echo URLROOT . 'pages/index'; ?>"> Home</a> </li>
            <li><i class="bi bi-people"></i>  <a href="<?php echo URLROOT . 'pages/view_users'; ?>">Users</a></li>
            <li><i class="bi bi-table"></i>  <a href="<?php echo URLROOT . 'pages/view_order'; ?>">Orders</a> </li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'products/edit_prod'; ?>">View Product</a> </li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'products/add_product'; ?>">Add Product</a></li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'pages/add_category'; ?>">Add Category</a></li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'products/add_gallery'; ?>">Add Gallery</a></li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'pages/view_messages'; ?>">View Messages</a></li>



        </ul>
    </div>
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1153</h1>
                        <h3>Products</h3>
                    </div>
                    <div class="icon-case">
                        <i class="bi bi-basket2"></i>
                    </div>
                </div>
                
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Messages</h2>
                        <li> <a href="<?php echo URLROOT . 'pages/view_messages'; ?>">View All</a></li>
                     </div>
                     <?php
                     $str="<table class='table table-striped table-bordered table-hover '>
                     <thead><tr>
                        <th>ID</th>
                          <th>Date</th>
                          <th>User Email</th>
                          <th>Client ID</th>
                          <th>Subject</th>
                          <th>Message</th>
                        </tr></thead>";
                        
                        $str.=" <tr><td>".$msg->Id."</td>
                         <td>".$msg->dateSent."</td>
                         <td>".$msg->UserEmail."</td>
                         <td>".$msg->UserID."</td> 
                         <td>".$msg->Subject."</td>
                         <td>".$msg->Message."<</td></tr>";
                       
                         $str.="</table> </div>";
                         echo $str;
                         ?>
                
                        
            </div>
        </div>
    </div>
</body>

</html>
<?php

    //require APPROOT . '/views/inc/footer.php';
  }
}
?>