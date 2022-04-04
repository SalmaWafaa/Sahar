<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


  <div class="container">
    <br>



    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">Search :</span>
        <input type="text" name="search_text" id="search_text" placeholder="Search for Product" class="form-control" />


      </div>


    </div>

    <br />
    <div id="result"></div>

</head>

    <body>


   

 
  


</body>





</html>
<script>
  $(document).ready(function() {

    load_data();

    function load_data(query) {
      $.ajax({
        url: "fetch.php",
        method: "POST",
        data: {
          query: query
        },
        success: function(data) {
          $('#result').html(data);
        }
      });
    }
    $('#search_text').keyup(function() {
      var search = $(this).val();
      if (search != '') {
        load_data(search);
      } else {
        load_data();
      }
    });
  });
</script>