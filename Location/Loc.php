<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localización - e-class</title>
    <link rel="stylesheet" href="Loc.css">
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <script src="https://kit.fontawesome.com/29079834be.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="navTitle">
        <h1 class="title">Localización</h1>
    <?php require "../PhpFks/Nav.php"; ?>

    <div id="mapa" class="mapa"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfqb11Rf16UahG0MijpidF4feGmVP7RLc"></script>
    <script>
        var vlatitude = 1;
        var vlongitude = 2;

        alert(getLocation());

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }
        
        function showPosition(position) {
            vlatitude = position.coords.latitude + 0.033176;
            vlongitude = position.coords.longitude - 0.086964;
            //alert(vlatitude);
            //alert(vlongitude);
            //return vlatitude + vlongitude;
            //console.log(vlatitude);
            //console.log(vlongitude); 
        }

        
        google.maps.event.addDomListener(window, "load", function(){
            //Aquí ya tenemos lista la librería
            var mapElement = document.getElementById('mapa');
            var map = new google.maps.Map(mapElement,{
                center:{
                    lat: vlatitude, 
                    lng: vlongitude
                },
                zoom: 15
            });
        })

        
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>