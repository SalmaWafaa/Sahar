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
   ?>
   

<body>
    <div class="side-menu">
        <ul>
            <li><i class="bi bi-speedometer2"></i><a href="<?php echo URLROOT . 'pages/index'; ?>"> Home</a> </li>
            <li><i class="bi bi-people"></i>  <a href="<?php echo URLROOT . 'pages/view_users'; ?>">Users</a></li>
            <li><i class="bi bi-table"></i>  <a href="<?php echo URLROOT . 'pages/view_order'; ?>">Orders</a> </li>
            <li><i class="bi bi-plus-circle"></i> <a href="<?php echo URLROOT . 'products/add_product'; ?>">Add Product</a> </li>
            <li><i class="bi bi-trash-fill"></i> <a href="<?php echo URLROOT . 'products/edit_delete_product'; ?>">Edit delete Product</a></li>
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
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
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
                        <tr>
                            <td>55</td>
                            <td>77D#</td>
                            <td>1</td>
                            <td>new cairo</td>
                            <td>23</td>
                            <td>credit card</td>
                            <td>50</td>
                            <td>01000000000</td>
                            <td>350</td>
                            <td>3/2/2022</td>
                        </tr>
                        <tr>
                        <td>92</td>
                            <td>79k#</td>
                            <td>3</td>
                            <td>sheikh zaied</td>
                            <td>46</td>
                            <td>cash on delivery</td>
                            <td>50</td>
                            <td>01000000000</td>
                            <td>1350</td>
                            <td>5/1/2022</td>
                        </tr>
                        <tr>
                        <td>137</td>
                            <td>02FF#</td>
                            <td>2</td>
                            <td>heliopolis</td>
                            <td>67</td>
                            <td>cash on delivery</td>
                            <td>50</td>
                            <td>01000000000</td>
                            <td>600</td>
                            <td>3/1/2022</td>
                        </tr>
                        
                        <tr>
                        <td>137</td>
                            <td>12MH#</td>
                            <td>1</td>
                            <td>Madenit Nassr</td>
                            <td>81</td>
                            <td>Credit Card</td>
                            <td>50</td>
                            <td>01000000000</td>
                            <td>175</td>
                            <td>14/5/2022</td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Top Users</h2>
                        <a href= "<?php  VIEWS_PATH . 'pages/view_users.php';?>" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>orders</th>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Yasmin Kandil</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Miriam Ayman</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>Salma Osama</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>rogina Michelle</td>
                            <td>9</td>
                        </tr>

                    </table>
                </div>
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