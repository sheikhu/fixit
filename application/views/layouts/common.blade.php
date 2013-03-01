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


            <link href="//cdn.jsdelivr.net/foundation/3.2.5/stylesheets/foundation.min.css" rel="stylesheet">
            <link href="//cdn.jsdelivr.net/foundation/3.2.5/stylesheets/app.css" rel="stylesheet">


        </head>

        <style type="text/css">
        .success{ color: #4DC555;}
        .error{ color: #C41A1A;}
        body{background-color: #C8DBDE;}
        #map { margin: auto; height: 400px; border: 1px solid black;}

        </style>
        <body>



                    <header>
                        <h1>Leaftlet !</h1>
                    </header>


                    <div class="row">

                        <div class="eight columns">
                            <div id="map"></div>
                            <div class="row">
                                <div class="span12">
                                    <div class="button-bar">
                                        <ul class="button-group">
                                          <li>
                                            <a id="action-report" href="#" class="button">
                                                Signaler un probleme
                                            </a></li>
                                          <li><a href="#" class="button">Button 2</a></li>
                                          <li><a href="#" class="button">Button 3</a></li>
                                      </ul>

                                      <ul class="button-group">
                                          <li><a href="#" class="button">Button 1</a></li>
                                          <li><a href="#" class="button">Button 2</a></li>
                                          <li><a href="#" class="button">Button 3</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <a href="" id="draw">Dessiner</a>



              <footer>
                <p>
                    &copy; Copyright  by datevid
                </p>
            </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/foundation/3.2.5/javascripts/foundation.min.js"></script>
    <script src="//cdn.jsdelivr.net/foundation/3.2.5/javascripts/app.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>

    <script type="text/javascript" src="{{ URL::to_asset('js/script.js')}}" charset="utf-8"></script>

    <script type="text/javascript" src="{{ URL::to_asset('js/actions.js')}}" charset="utf-8"></script>
</body>
</html>
