$('a#action-report').on('click', function(e){

	e.preventDefault();

	if($('#form-report-new').length > 0)
		return;

	jQuery.get('reports/new', function(data, textStatus, xhr) {

		var container = $('<div/>').addClass('four columns').html(data).hide();
		$('#map').parent('div').after(container);

		$(container).fadeIn();
	});


});

/*** Report new action ***/

$(document).on('submit', 'form#form-report-new', function(e){

	e.preventDefault();
	e.stopPropagation();
	var marker = jQuery.data(document.body, 'current_marker');
	var data = {'lat':marker._latlng.lat, 'lng':marker._latlng.lng};

	data = $(this).serialize() + '&' + $.param(data) ;










	jQuery.post('reports/new', data, function(data, textStatus, xhr) {

		var popup;

		if(data.message == 'ok')
			marker.bindPopup('<span class="success">Report added !</span>').openPopup();
		else
			marker.bindPopup('<span class="error">Report failed !</span>').openPopup();
	});

	return false;


});