 $(function() {


            var center = [14.74026, -17.45605];

        var map = L.map('map').setView(center, 16);

        L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }).addTo(map);


        /**** Recuperer tous les points deja ajoutés  ****/

        jQuery.get('reports', function(data, textStatus, xhr) {

            data.map(function(object){

                var report = object.attributes;
                var location = object.relationships.location.attributes;

                var title = report.title;
                var description = report.description;

                L.marker([location.latitude, location.longitude])
                .bindPopup('<span class="report-title">'+title+'</span><p class="content">'+description+'</p>')
                .openPopup()
                .addTo(map);
            });
        });





        /** Fonction qui permet d'ajouter un markeur ***/

        function addMarker(event)
        {
            var marker = L.marker(event.latlng)
            .addTo(map);




            marker.on('click', function()
             {
                $('#action-report').click();
                jQuery.data(document.body, 'current_marker', marker);
            //     marker.bindPopup('Loading...').openPopup();

            //     title = prompt('Donnez le titre :');

            //     description = prompt('Donnez la description :');

            //     data = {
            //         'title': title,
            //         'description': description,
            //         'lat': this._latlng.lat,
            //         'lng': this._latlng.lng
            //     };

            //     jQuery.post('reports/new',data , function(data, textStatus, xhr) {

            //         var popup;

            //       if(data.message == 'ok')
            //         marker.bindPopup('<span class="success">Report added !</span>').openPopup();
            //     else
            //         marker.bindPopup('<span class="error">Report failed !</span>').openPopup();


            // });



            });

        }

        map.on('click', function(event){

            addMarker(event);

        });


        });