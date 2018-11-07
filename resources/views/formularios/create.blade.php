@extends('layouts.app')

@section('content')
	@if(session()->has('info'))
		<h3>{{	session('info')	}}</h3>
	@else
	<form action="{{ Route('formularios.store')}}" method="post">
		{!! csrf_field() !!}
		<label for="fname">
			Descripcion del formulario
			<input type="text" name="fname" class="form-control" id="fname" value="{{ old('fname') }}">
			{!! $errors->first('fname', '<span class="error">:message</span>') !!}
		</label>
		<br><br>
		<button type="submit">Enviar</button>
	</form>
	@endif

@endsection