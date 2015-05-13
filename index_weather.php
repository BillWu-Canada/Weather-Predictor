<!doctype html>
<html>
<head>
  <title>weather predict</title>
      <meta charset="utf-8" />
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">

</head>


<style>

   html, body {
   	  height: 100%;
   }

   #main_container {
   	  background-image: url(weather_background2.jpeg);
   	  height: 100%;
   	  width: 100%;
   	  background-size: cover;
   	  background-position: center;
   }

   .center {
      text-align: center;
   }

   .black {
      color: black;
   }

   #info_div {
   	  padding-top: 100px;
   }

   button {
       margin-top: 20px;
       margin-bottom: 20px;
   }

   .form-group {
     margin-top: 20px;
   }

   .alert {
    margin-top: 27px;
    display: none;
   }


</style>


<body>

   <div class="container" id="main_container">

    <div class="row">

     <div class="col-md-6 col-md-offset-3 center black" id="info_div">
       <h1 class="center black">Weather Predictor</h1>
       </p class="lead center">please enter the city below to find the weather of that location</p>

       <from>
         <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="eg. Toronto, Waterloo, Montreal..." />
         </div>	

         <button id="findmyweather" class="btn btn-success btn-lg">Find My Weather</button>

       </from>	

     </div>

       

    </div>

    <div id="success" class="alert alert-success col-md-6 col-md-offset-3">yeah!!</div>
    <div id="danger" class="alert alert-danger col-md-6 col-md-offset-3">Please enter a valid city name.</div>

   </div>


<!-- including jquery-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script>

   $("#findmyweather").click(function(event) {

        // prevent form be submitted and execute code of $.get...
        event.preventDefault();

        $(".alert").hide();

        if ($("#city").val() == "") {
           //alert("please enter a city.");
           $("#danger").fadeIn();
        }

        else {
           $.get("scraper.php?city="+$("#city").val(),function(data) {
               //alert(data);
               if (data != "") {
                  $("#success").html(data).fadeIn();
               }
               else {
                  $("#danger").fadeIn();
               }
           })
        }

   });

</script>


</body>
</html>




