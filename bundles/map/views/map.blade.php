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



            <div class="row">
                <header class="">
                    <h1>Leaftlet !</h1>
                </header>
            </div>


            <div class="row">

                <div class="eight columns">
                    <div id="map">
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <ul class="button-group radius">
                                <li>
                                    <a id="action-report" href="#" class="button radius">
                                        Signaler un problème
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="button radius">Button 2</a>
                                </li>
                                <li>
                                    <a href="#" class="button radius">Button 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <footer class="row">
            <p>
                &copy; Copyright  by datevid
            </p>
        </footer>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/foundation/3.2.5/javascripts/modernizr.foundation.js"></script>
        <script src="//cdn.jsdelivr.net/foundation/3.2.5/javascripts/foundation.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>

        <script type="text/javascript" src="{{ URL::to_asset('js/script.js')}}" charset="utf-8"></script>

        <script type="text/javascript" src="{{ URL::to_asset('js/actions.js')}}" charset="utf-8"></script>
    </body>
    </html>
