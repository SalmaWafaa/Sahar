
<?php
class view_categories extends View
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
    $categories=$this->model->getAllCategories();
    //$e="Edit";
    ?>
    <table class='table table-striped table-bordered table-hover '>
		<thead><tr class='table-warning'>
			<th>ID</th>
			<th>Category Name</th>
            <th>Category Image</th>
            <th>Edit</th>
		</tr>
    </thead>
       <?php 
        foreach($categories as $x)
        {
         ?>  
        <tr>	
        <td> <?php echo $x->catID;?></td>
        <td> <?php echo $x->CatName;?></td>
        <td><img src="<?php echo ImageRoot . $x->CatImage ;?>" width="70" height="70" ></td>
    <td><a href= "<?php echo URLROOT . 'products/Edit_category?id='.$x->catID; ?>" >Edit/Delete </a></td>
        </tr>
   
    <?php
        }
        ?>
        </table>
        <?php
      require APPROOT . '/views/inc/footer.php';
  }


}
?>
