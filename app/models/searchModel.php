<?php
class searchModel extends model
{
  function getProducts()
  {
    $conn = new mysqli("localhost", "root", "", "sahar");
if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($conn, $_POST["query"]);
  $query = "
  SELECT * FROM products
  WHERE ProductName LIKE '%" . $search . "%'
  
 ";
} else {
  $query = "
  SELECT * FROM products ORDER BY ProductID
 ";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  echo "<div class='row myprods'>";
  $result->data_seek(0);
  while ($row = $result->fetch_assoc()) {
   
    echo "<div style='margin-top: 3%' class='col-lg'>";
   
    echo        "<div class='card-body'>";
    echo          "<h5 class='card-title'>"  . $row['ProductName'] . "</h5>";
    echo          "<p class='card-text'>" . $row['email'] . "</p>";
   
    echo      "</div>";

    
       ?>
       <div class="row row-cols-2 row-cols-md-4">
         <?php
   
  <div class="col mb-4">
      <form action="" method="post">
    <div class="card shadow">
    <a href="<?php echo URLROOT . "products/product?id=$p->ProductID&cid=$p->Cat_ID";?>">
      <img src="<?php echo ImageRoot . $p->ProductImage ; ?>" alt="Image1" class="card-img-top"  >
</div>
   </a>
   
      <div class="card-body">
        <h5 class="card-title"><?php echo $p->ProductName;?></h5>
        <h6>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
        </h6>
        <p class="card-text"> <?php echo $p->Description ;?>
                              </p>
                              <h5>
                              <small><s class="text-secondary">419 EGP</s></small>
                               <span class="price"> <?php echo $p->Price;?> EGP</span>
                              </h5>
                              <button class="btn btn-warning my-3" name="add">Add to Cart <i class="bi bi-cart4"></i><a href="<?php echo URLROOT . 'products/cart?pid='.$p->ProductID; ?>" ></a></button>
                               <input type='hidden' name='product_id' value='<?php  $p->ProductID;?>'>
      </div>
</form>
   </div>
   
  
  

  
  </div>


  
  echo "</div>";
} else {
  echo 'Data Not Found';
}

  }
}