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
   
    

    
       
     echo "<div class='row row-cols-2 row-cols-md-4'>";
        
   
  echo "<div class='col mb-4'>";
     echo "<form action='' method='post'>";

    echo"<div class='card shadow'>";

    echo "<a href='<?php echo URLROOT . 'products/product?id=.$row['ProductID']&cid=.$row['Cat_ID']';?>'>";
     echo" <img src='<?php echo ImageRoot .$row ['ProductImage'] ; ?>' alt='Image1' class='card-img-top'  >";

echo"</div>";
   echo"</a>";
   
     echo" <div class='card-body'>";

       echo" <h5 class='card-title'><?php echo.$row['ProductName'];?></h5>":
        echo"<h6>":
                             echo" <i class='bi bi-star-fill'></i>";
                             echo" <i class='bi bi-star-fill'></i>";
                              echo"<i class='bi bi-star-fill'></i>";
                              echo"<i class='bi bi-star-fill'></i>";
                              echo"<i class='bi bi-star-fill'></i>";
        echo"</h6>";
        echo"<p class='card-text'> <?php echo .$row['Description'] ;?>":
                             echo" </p>":
                              echo"<h5>";

                              echo"<small><s class='text-secondary'>419 EGP</s></small>";
                              echo" <span class='price'> <?php echo .$row ['Price'];?> EGP</span>";
                              echo"</h5>";
                              echo"<button class='btn btn-warning my-3' name='add'>Add to Cart <i class='bi bi-cart4'></i><a href='<?php echo URLROOT . 'products/cart?pid='.$p->ProductID; ?>' ></a></button>";
                               echo"<input type='hidden' name='product_id' value='<?php  .$row['ProductID'];?>'>";
      echo"</div>";
echo"</form>";
   echo"</div>";
   
  
  

  
  echo"</div>";


  
  echo "</div>";
} else {
  echo 'Data Not Found';
}

  }
}