
<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
    </div>
  </div>
 
  <div class="jumbotron jumbotron-fluid">  
  <div class="container">
      <h1 class="display-4"  > WHO WE ARE</h1>
      <h2>We Are Talented Skilled Engineers with Great Experience of Mobile Phone Products and Service Since 1998.</h2>
      <p>After Many Successful Stories in Cell Phone Field, We Decide to Establish SA7-R Company Which Provide Customers with Extensive Product and Professional Service to Their Mobile.</p>
    </div>
    </div>

    <div class="jumbotron jumbotron-fluid">  
    <div class="container">
        <h1 class="display-4"> Mission</h1>
        <h2>Win Every Customer Trust..</h2>
        <p>SA7-R Mission Is To Offer Its Customers The Highest Quality Cell Phone Products And Services. Its Owner Focuses On Personalized Service To His Customers By Offering Convenience And Rapid Service. Additionally, SA7-R Has The Technological Expertise To Assist Customers In Picking The Product And Service That Best Meets Their  Needs. Finally, Our Staff Will Have Strong Vendor Relationships With The Product Suppliers And Will Be Able To Meet Customers’ Demand For The Newest Innovation In Cellular Phone Technology.</p>
        <img src="<?php echo ImageRoot . 'mission.jpg' ; ?>" class="d-block w-100" alt="...">
      </div>
      </div>
      <div class="jumbotron jumbotron-fluid">  
    <div class="container">
        <h1 class="display-4" > Vision</h1>
        <img src="<?php echo ImageRoot . 'vison.jpg' ; ?>" class="d-block w-100" alt="...">
      </div>
      </div>
   
   
 
 
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
