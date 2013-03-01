{{ Form::open_for_files('upload')}}

{{ Form::label('file', 'File')}}

{{ Form::file('file')}}

{{ Form::submit('Send')}}

{{ Form::close() }}