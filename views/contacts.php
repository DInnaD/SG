<?php require('header.php') ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title>IT Компания высокого уровня</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   </head>
   
 <style>

 
    </style>
    
    <body>


			      		    <h3><a href="//softgroup.ua" target="_blank">Наши контакты</a></h3>
                          			    	  
                          <div class="col-md-12">
							<p>Украина, 33000, Ровно</p>
							<p>пл.Независимости, 3 оф. 418</p>
							<p>Tel: +38-0362-450-044</p>
                            <p>web: https://www.softgroup.ua</p>				
                                    <h3></h3>
    <div class="my_container">                          
    <div id="map"style="width:400px;height:400px"></div>
    <script>
      function initMap() {
        var uluru = {lat: 50.619573 , lng: 26.250624};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru,
            mapTypeId: google.maps.MapTypeId.HYBRID
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx713Z6MzLSQe5QSC2mtrRE0XIxb1LRns&callback=initMap">
    </script>
                             
   
                          
                          
                          
      
       
<?php require('footer.php') ?>	