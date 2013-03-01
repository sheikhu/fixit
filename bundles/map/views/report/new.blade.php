{{ Form::open_for_files(URL::to('report/new'), 'POST', array('id' => 'form-report-new'))}}

		<fieldset>
			<legend>Signaler un probleme</legend>

			{{ Form::label('title', 'Titre')}}

			{{ Form::text('title')}}

			{{ Form::label('desctiption', 'Description')}}

			{{ Form::textarea('description')}}

			{{ Form::label('photo', 'Image')}}

			{{ Form::file('photo')}}

			{{ Form::submit('Valider', array('class' => 'button submit-report')) }}

		</fieldset>
	{{ Form::close()}}
