<div class='formularioGeneral2'>
<hr>

<h3>Datos generales de la solicitud:</h3>
<br>


<div class='form-horizontal col-md-6 '>
<label>Sub categoria:</label>
<select name="txtsubCategoria2" style="background-color: #fcf8e3" class="form-control" 
          onchange="from(document.formularioUno.txtsubCategoria2.value,'midiv7','formularioVistaPrecios.php')">
                  
                <option value="00">Seleccione</option>
         <?php 
            /*
             $sqlformulario = 'SELECT detalle, precio FROM detalleprecios where opcion='.$valordetallePrecios;
    foreach ($connpdo->query($sqlformulario) as $rowpdo) {?>
                        <option value="<?php echo $rowpdo['detalle']; ?>"><?php echo $rowpdo['detalle']; ?></option>
            <?php
                  }
    */
            ?> 
                
                
</select>

<div hidden>
     <div  id="midiv7"></div>  
   

</div> 
    
    
    <label >Nombre del editor o divulgador (si es obra anonima):</label>
<input class="form-control" type="text" name="txtnombreEditor" id="txtnombreEditor">

    <label >Titulo de la obra en idioma original:</label>
<input class="form-control" type="text" name="txtidiomaOriginal" id="txtidiomaOriginal">

    <label >Titulo de la obra en castellano:</label>
<input class="form-control" type="text" name="txtidiomaCastellano" id="txtidiomaCastellano">


<label>Condicion de la obra:</label>
<select   style="background-color: #fcf8e3" class="form-control" id="txtcondicionObra" name="txtcondicionObra" >
                
                <option value="01">Seleccione</option>
                <option value="Obra inedita">Obra inedita</option>
                <option value="Obra publicada">Obra publicada</option>
            <option value="Obra originaria">Obra originaria</option>
<option value="Obra derivada">Obra derivada</option>
<option value="Obra individual">Obra individual</option>
<option value="Obra colectiva">Obra colectiva</option>
<option value="Obra en colaboracion">Obra en colaboracion</option>


</select>


    <label >Año de realizacion:</label>
<input class="form-control" type="date" name="txtaRealizacion" id="txtaRealizacion">


<label>Breve descripcion:</label>
<textarea class="form-control" name="txtbreve" id="txtbreve" ></textarea>



</div>



<div class="form-horizontal col-md-6 ">
    
        <label >Fecha primera publicacion</label>
<input class="form-control" type="date" name="txtprimeraF" id="txtprimeraF">

    <label >Pais origen de la obra:</label>
<input class="form-control" type="text" name="txtpaisObra" id="txtpaisObra">

    
    
<label>Nombre del autor o co-autores:</label>
<input type="text" class="form-control" name="txtnombreCo" id="txtnombreCo" required="true">

<label>Domicilio del autor o co-autores:</label>
<input type="text" class="form-control" name="txtdomicilioCo" id="txtdomicilioCo" required="true">


<label>Nombre del productor:</label>
<input type="text" class="form-control" name="txtnombrePr" id="txtnombrePr" required="true">


<label>Domicilio del productor:</label>
<input type="text" class="form-control" name="txtdomicilioPr" id="txtdomicilioPr" required="true">



<label>Otros datos de interes:</label>
<textarea class="form-control" name="txtotrosDatos" id="txtotrosDatos"></textarea>



<br>
<br>
</div>

<div class=" col-lg-offset-5">

<br>
<br><br>
<br><br>
<br>
<br>
<br>
<input  class="btn btn-primary btn-lg"   type="button" name="txtbotonvistaTres"   value="ADJUNTAR ARCHIVOS"   onclick="from(document.formularioUno.txtbotonvistaTres.value,'midiv2','formularioVistaTres.php')" >
</div>

<br>
<br>
<hr>



 <div  id="midiv2"></div>  

<br>
<br>




</div>
