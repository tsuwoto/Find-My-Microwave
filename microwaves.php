<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 690px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3><center>Microwaves at Tech</center></h3>





    <div id="map"></div>
    <script>
    "use strict";
      function initMap() {
        var gtech = {lat: 33.7756, lng: -84.3963};
        var studentcenter = {lat: 33.7739, lng: -84.3988};
        var microwave_locations = [gtech, studentcenter];
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: gtech
        });
        for (var i = 0; i < microwave_locations.length; i++) {
          var marker = new google.maps.Marker({
            position: microwave_locations[i],
          });
          marker.setMap(map);
        } 
        
      }








    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuJbQZxVReStcBJIQ2rV6K2DfeCPlcWr4&callback=initMap">
    </script>



<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<br><b><center>Tell Us About Your Microwaves</center></b><br>
<form action="" method="post">
<center>Building: <input type="text" name="Building"></center><br>
<center>Room: <input type="text" name="Room"></center><br>
<center>Is the room buzzcard-access only?
  <input type="radio" name="Buzzcard" value="Yes" />Yes
  <input type="radio" name="Buzzcard" value="No" />No<br/></center><br>
<center><input type="submit" name="submit" value="Submit"></center>
</form>

</body>
</html> 

<? 
if(isset($_POST['submit'])){
    $to = "amandahui@gatech.edu";
    $from = $_POST['pretendemail@gatech.edu'];
    $Building = $_POST['Building'];
    $Room = $_POST['Room'];
    $Buzzcard = $_POST['Buzzcard'];
    $subject = "Microwaves at Tech Suggestion";
    //$subject2 = "Copy of your form submission to Microwaves at Tech"; -->
    $message = $Building . $Room . $Buzzcard;
    //$message2 = "Here is a copy of your message " . $Building . $Room . $Buzzcard; -->
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender -->
    echo "Mail Sent. Thank you for helping make Tech a better place :)";
    }
?>


  </body>
</html>