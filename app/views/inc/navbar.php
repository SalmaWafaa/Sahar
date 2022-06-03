<link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 ">
<img src="<?php echo ImageRoot . 'logo1.jpeg' ; ?>" width="80" height="30" alt="" alt="...">

    <a class="navbar-brand" href="<?php echo URLROOT . 'public'; ?>"><?php echo SITENAME; ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'products/categories'; ?>">Categories</a>
           </li>
          
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/about'; ?>">About Us</a>
           </li>
           <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/gallery'; ?>">Gallery</a>
           </li> 
            <li class="nav-item">  <a class="nav-link" href="<?php echo URLROOT . 'pages/Contact'; ?>">Contact</a>
         </li>
         
  
         </ul>
          <form class="form-inline">
       
       
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              
            <?php if (isset($_SESSION['user_id'])) : 
            ?> 
            
              <?php
              if($_SESSION['user_Type_ID']== 2):
?> 
      <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'products/Ordershistory'; ?>">Orders History</a>
           </li>
             
              <?php else:?>
          
              <li class="nav-item">
             <a class="nav-link " href= "<?php echo URLROOT . 'pages/dashboard'; ?>">Dashboard</a>
              </li>
              </ul>
              <?php endif;?>
      
       <div class=" btn btn-warning">
            <a class="nav-link" href="<?php echo URLROOT . 'users/EditProfile'; ?>"> <?php echo $_SESSION['user_Fname']; ?> </a>
              </div> <button class="p-2"><a href="users/logout">Logout</a></button>

            <?php else : ?>
              <button class="btn btn-outline-warning"> <a href="<?php echo URLROOT . 'users/login'; ?>" >Login</a></button>
              <button class="btn btn-outline-warning"> <a href="<?php echo URLROOT . 'users/register'; ?>" >Sign_Up</a></button>
                 </form>
 <?php endif; ?>
    </div>
  </div>
</nav>