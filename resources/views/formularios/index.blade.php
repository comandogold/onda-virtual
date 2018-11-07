@extends('layouts.app')

@section('content')
	<div class="container">
			<h1>Formulario de registro solicitudes:</h1>
			<hr>

	    <form id="formularioUno" name="formularioUno" action="registraInfo.php" method="POST" enctype="multipart/form-data">
                @csrf
			<h3>Datos del autor o titular de los derechos:</h3>
			<br>

			<div class="control-label row">
				<div class="col-md-6">  
					<label>Nombre del autor o titular:</label>
					<input  class="form-control" type="text" name="txtnombreAutor" id="txtnombreAutor" required autofocus>
					{!! $errors->first('txtnombreAutor', '<span class="error">:message</span>') !!}

					<label>Seudonimo:</label>
					<input  class="form-control" type="text" name="txtseudonimo" id="txtseudonimo" required="true">
					{!! $errors->first('txtseudonimo', '<span class="error">:message</span>') !!}

					<label>Nacionalidad:</label>
					<input  class="form-control" type="text" name="txtnacionalidad" id="txtnacionalidad" required="true">
					{!! $errors->first('txtnacionalidad', '<span class="error">:message</span>') !!}



					<label>Cedula o Pasaporte:</label>
					<input  class="form-control" type="number" name="txtcedula" id="txtcedula" required="true" placeholder="_____--_________--___">
					{!! $errors->first('txtcedula', '<span class="error">:message</span>') !!}
				</div>
				<div class="col-md-6">
					<label>Domicilio:</label>
					<br>
					<input  class="form-control" type="textarea" rows="12" cols="60" name="txtdomicilioA" id="txtdomicilioA" required="true" placeholder="Calle, No., Avenida, Residencial">
					{!! $errors->first('txtdomicilioA', '<span class="error">:message</span>') !!}

					<label>Telefono:</label>
					<input type="number"  class="form-control" name="txttelefono" id="txttelefono" required="true" placeholder="1-688-756-4646">
					{!! $errors->first('txttelefono', '<span class="error">:message</span>') !!}

					<label>Opcional - Fecha fallecimiento del autor:</label>
					<input type="date"  class="form-control" name="txtfallecimiento" id="txtfallecimiento" placeholder="23/11/2016">
					{!! $errors->first('txtfallecimiento', '<span class="error">:message</span>') !!}


					<label>Tipo de registro:</label>
					<select   style="background-color: #fcf8e3" class="form-control" id="txtcategoria" name="txtcategoria">                
					    <option value="">Seleccione</option>
					    @foreach($tform as $t_form)
					    	<option value="{{ $t_form->id }}">{{ $t_form->fname }}</option>
					    @endforeach
					</select>

				</div>
			</div>
			<hr>
			<div  id="midiv1"></div> 
		</form>
	</div>
	

@endsection


@section('scripts')
	<script src="{{ asset('js/registros.js') }}"></script>
@endsection