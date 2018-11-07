<?php

?>



<div class='formularioGeneral2'>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<hr>

<h3>Datos generales de la solicitud:</h3>
<br>


<div class='form-horizontal col-md-6 '>
<label>Sub categoria:</label>
<select   style="background-color: #fcf8e3" class="form-control" id="txtsubCategoria2" name="txtsubCategoria2"
          onchange="from(document.formularioUno.txtsubCategoria2.value,'midiv4','formularioVistaPrecios.php')">
                
                <option value="01">Seleccione</option>
            <?php 
            
             $sqlformulario = 'SELECT detalle, precio FROM detalleprecios where opcion='.$valordetallePrecios;
    foreach ($connpdo->query($sqlformulario) as $rowpdo) {?>
                        <option value="<?php echo $rowpdo['detalle']; ?>"><?php echo $rowpdo['detalle']; ?></option>
            <?php
                  }

            ?>
                
                
</select>

<div hidden="true">
     <div  id="midiv4"></div>  
   

</div> 
    
    
    <label >Nombre o razon social del productor:</label>
<input class="form-control" type="text" name="txtnombresopro" id="txtnombresopro">

<label>RNC del productor o representante:</label>
<input class="form-control" type="text" name="txtrncproRep" id="txtrncproRep">


<label>Domicilio:</label>
<textarea class="form-control" name="txtdomicilioRnc" id="txtdomicilioRnc" ></textarea>


</div>



<div class="form-horizontal col-md-6 ">
    
<label>Nombre del autor o coautores:</label>
<input type="text" class="form-control" name="txtnombreAutorCoa" id="txtnombreAutorCoa" required="true">

<label>fecha realizacion del programa:</label>
<input type="date" class="form-control" name="txtfechaReaPro" id="txtfechaReaPro" required="true">

<label>Año sucesivas versiones:</label>
<input type="date" class="form-control" name="txtfechasuver" id="txtfechasuver" required="true">

<label>Otros datos de interes (publicacion, exhibicion o ubicacion):</label>
<textarea class="form-control" name="txtotrosDatosPro" id="txtotrosDatosPro"></textarea>


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
<input  class="btn btn-primary btn-lg"   type="button" name="txtbotonvistaTres"  value="ADJUNTAR ARCHIVOS"  onclick="from(document.formularioUno.txtbotonvistaTres.value,'midiv2','formularioVistaTres.php')" >
</div>

<br>
<br>
<hr>



 <div  id="midiv2"></div>  

<br>
<br>




</div>
