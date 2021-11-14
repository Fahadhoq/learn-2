<!DOCTYPE html>
<html>
  <head>
    <title>jQuery UI Autocomplete with Images and Custom HTML in PHP</title>
   
    <script src="js/jquery-1.10.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- auto compleate  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />

    <style type="text/css">
      .ui-autocomplete-row
      {
        padding:8px;
        background-color: #f4f4f4;
        border-bottom:1px solid #ccc;
        font-weight:bold;
      }
      .ui-autocomplete-row:hover
      {
        background-color: #ddd;
      }
    </style>
  </head>
  <body>
    <br />
    <br />
    <div class="container">
      <h3 align="center">Ajax AutoComplete Textbox with Image using jQuery UI in PHP</h3>
      <br />
      <br />
      <br />
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
          <input type="text" id="search_data" placeholder="Enter Student name..." autocomplete="off" class="form-control input-lg" />
        </div>
        <div class="col-md-3">

        </div>
      </div>
    </div>
  </body>
</html>
<script>
  $(document).ready(function(){
      
    $('#search_data').autocomplete({
      source: "fetch.php",
      minLength: 1,
      select: function(event, ui)
      {
        $('#search_data').val(ui.item.value);
      }
    }).data('ui-autocomplete')._renderItem = function(ul, item){
      return $("<li class='ui-autocomplete-row'></li>")
        .data("item.autocomplete", item)
        .append(item.label)
        .appendTo(ul);
    };

  });
</script>