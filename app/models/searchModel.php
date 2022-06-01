<?php
class searchModel extends model
{
  function getProducts()
  {
    $conn = new mysqli("localhost", "root", "", "miublog");
if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($conn, $_POST["query"]);
  $query = "
  SELECT * FROM doctors 
  WHERE name LIKE '%" . $search . "%'
  
 ";
} else {
  $query = "
  SELECT * FROM doctors ORDER BY id
 ";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  echo "<div class='row myprods'>";
  $result->data_seek(0);
  while ($row = $result->fetch_assoc()) {
   
    echo "<div style='margin-top: 3%' class='col-lg'>";
   
    echo        "<div class='card-body'>";
    echo          "<h5 class='card-title'>"  . $row['name'] . "</h5>";
    echo          "<p class='card-text'>" . $row['email'] . "</p>";
   
    echo      "</div>";
  }
  echo "</div>";
} else {
  echo 'Data Not Found';
}

  }
}