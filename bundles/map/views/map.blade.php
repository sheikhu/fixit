<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>templates</title>
    <meta name="description" content="" />
    <meta name="author" content="datevid" />
    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.css" />
         <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.ie.css" />
            <![endif]-->
            <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        </head>

        <style type="text/css">
        .success{ color: #4DC555;}
        .error{ color: #C41A1A;}
        body{background-color: #C8DBDE;}
        #map { border-radius: 10px; margin: auto; width: 400px; height: 400px; border: 1px solid black;}

        </style>
        <body>
            <div>
                <header>
                    <h1>Leaftlet !</h1>
                </header>


                <div id="map"></div>

                <a href="" id="draw">Dessiner</a>


            </section>
            <footer>
                <p>
                    &copy; Copyright  by datevid
                </p>
            </footer>
        </div>
        <script type="text/javascript" charset="utf-8">

        $(function() {

            var center = [14.74026, -17.45605];

        var map = L.map('map').setView(center, 16);

        L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }).addTo(map);


        /**** Recuperer tous les points deja ajoutés  ****/

        jQuery.get('reports', function(data, textStatus, xhr) {

            data.map(function(report){

                alert(report.attributes.id);
            });
        });





        /** Fonction qui permet d'ajouter un markeur ***/

        function addMarker(event)
        {
            var marker = L.marker(event.latlng)
            .addTo(map);


            marker.on('click', function()
            {
                marker.bindPopup('Loading...').openPopup();

                // title = prompt('Donnez le titre :');

                // description = prompt('Donnez la description :');

                title = 'test';

                description = 'description test';

                data = {
                    'title': title,
                    'description': description,
                    'lat': this._latlng.lat,
                    'lng': this._latlng.lng
                };

                jQuery.post('reports/new',data , function(data, textStatus, xhr) {

                    var popup;

                  if(data.message == 'ok')
                    marker.bindPopup('<span class="success">Report added !</span>').openPopup();
                else
                    marker.bindPopup('<span class="error">Report failed !</span>').openPopup();


            });



            });

        }


        map.on('click', function(event){

            addMarker(event);

        });


        });

        </script>
    </body>
    </html>
