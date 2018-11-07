$(function() {

	$("#txtcategoria").on('change', function(){
		switch ( $("#txtcategoria").val() ) {
		    case '1':
		      	data_form = 'formularios.formato.form1';
		      break;
		    case '2':
		      	data_form = 'formularios/formato/formDos.php';
		      break;
		    case '3':
		      	data_form = 'formularios/formato/formTres.php';
		      break;
		    case '4':
		      	data_form = 'formularios/formato/formCuatro.php';
		      break;
		    case '5':
		      	data_form = 'formularios/formato/formCinco.php';
		      break;
		    case '6':
		      	data_form = 'formularios/formato/formSeis.php';
		      break;
		    case '7':
		      	data_form = 'formularios/formato/formSiete.php';
		      break;
		    case '8':
		      	data_form = 'formularios/formato/formOcho.php';
		      break;
		    case '9':
		      	data_form = 'formularios/formato/formNueve.php';
		      break;
		  	case '10':
		      	data_form = 'formularios/formato/formDiez.php';
		    break;
		    default:
		    	data_form = '';
		    	break;
		}
				//$("#midiv1").html('@include("'+data_form+'")');
				var form_data = {
				   'form': '@include("'+data_form+'")'
				} 
		
	});

});