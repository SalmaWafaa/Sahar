<?php

session_start();
$conn = new mysqli("localhost", "root", "", "sahar");
if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($conn, $_POST["query"]);
  $query = "
  SELECT * FROM products
  WHERE ProductName LIKE '%" . $search . "%'
  
 ";
} else {
  $query = "
  SELECT * FROM products ORDER BY id
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
    echo          "<p class='card-text'>" . $row['Price'] . "</p>";
   
    echo      "</div>";
  }
  echo "</div>";
} else {
  echo 'Data Not Found';
}



?>