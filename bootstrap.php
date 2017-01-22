<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <title>Find My Microwave</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Microwaves at Georgia Tech</h3>
      </div>

      <div class="jumbotron">
        <h1>Find My Microwave</h1>
          <div id="map"></div>
</div>

        <script>
          function initMap() {
           var gtech = {lat: 33.7756, lng: -84.3963};
           var studentcenter = {lat: 33.7739, lng: -84.3988};
           var culc = {lat: 33.774953, lng: -84.396295};
           var love = {lat: 33.776727, lng: -84.401842};
           var klaus = {lat: 33.777191, lng: -84.396202};
           var ibb = {lat: 33.779010, lng: -84.397259};
           var smith = {lat: 33.7736495, lng: -84.3951647};
           var microwave_locations = [studentcenter, culc, love, klaus, ibb, smith];
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 15,
             center: gtech
           });
           var scinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>Student Center (4)</font></b>'+
              '<div id="bodyContent">'+
              '<br/><b><font size = "-1">Second Floor (2) </b>: Two microwaves in the food court near the Dunkin&#39 Donuts' +
              '<br/><b>First Floor (2) </b>: One microwave next to the Chick-fil-a; one microwave in the back of Burdell&#39s</font>'+
              '</div>'+
              '</div>';
            var culcinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>Clough Undergraduate Learning Commons</font></b>'+
              '<div id="bodyContent">'+
              '<br/><b><font size = "-1">Room 284</b>: Second floor CULC, requires Buzzcard access(possibly faculty only), locked after hours </font>'+
              '</div>'+
              '</div>';
            var loveinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>Erskine Love Jr. Manufacturing Building</font></b>'+
              '<div id="bodyContent">'+
              '<br/><font size="-1">First floor atrium under the stairs</font>'+
              '</div>'+
              '</div>';
            var klausinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>Klaus (2)</font></b>'+
              '<div id="bodyContent">'+
              '<br/><font size="-1">Breakroom on second and third floors near giant stairs</font>'+
              '</div>'+
              '</div>';
            var ibbinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>Parker H. Petite Science Center</font></b>'+
              '<div id="bodyContent">'+
              '<br/><font size="-1">Rear of the building by the vending machines</font>'+
              '</div>'+
              '</div>';
            var smithinfowin = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<id="firstHeading" class="firstHeading"><font size="+2"><b>D.M. Smith</font></b>'+
              '<div id="bodyContent">'+
              '<br/><font size="-1">basement lounge/kitchen near entrance from Freshman Hill</font>'+
              '</div>'+
              '</div>';
            var loc_info = [scinfowin, culcinfowin, loveinfowin, klausinfowin, ibbinfowin, smithinfowin];



            for (var i = 0; i < microwave_locations.length; i++) {
              var marker = new google.maps.Marker({
                position: microwave_locations[i],
                map: map,
                index: i
              });
              marker.setMap(map);
              if (loc_info.length == microwave_locations.length) {
                marker.addListener('click', function() {
                  if (curInfo != null){
                    curInfo.close();
                  }
                  curInfo = new google.maps.InfoWindow({
                    content: loc_info[this.index]
                  });
                  curInfo.open(map, this);
                });
              };
            }
          }
          var curInfo = null;




        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuJbQZxVReStcBJIQ2rV6K2DfeCPlcWr4&callback=initMap">
        </script>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4><b>Tell Us About Your Microwaves!</b></h4><br>
            <form method="post" action="mailto:findmymicrowave@gmail.com?subject=New Microwave" enctype="text/plain">
            <center>Building: <input type="text" name="Building"></center><br>
            <center>Location Details (ex: room number): <input type="text" name="Details"></center><br>
            <center>Is the room Buzzcard-access only?
              <input type="radio" name="Buzzcard" value="Yes" />Yes
              <input type="radio" name="Buzzcard" value="No" />No<br/></center><br>
            <center><input type="submit" name="submit" value="Submit"></center>
            </form>


      </div>



    </div> <!-- /container -->

    <footer class="footer">
        <!-- <p>Tiffany Suwoto, Cy Heffley, Zach Justice</p> -->
        <p>&copy; 2017 Hack GTeeny</p>
      </footer>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>