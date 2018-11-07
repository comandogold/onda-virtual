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
    
    
    <label >Identificacion del organismo de radiodifusion:</label>
<input class="form-control" type="text" name="txtidentificacionRadio" id="txtidentificacionRadio">

<label>Domicilio:</label>
<textarea class="form-control" type="text" name="txtdomicilioRadio" id="txtdomicilioRadio"></textarea>

<label>Año de la primera publicacion:</label>
<input type="date" class="form-control" name="txtpublicaradio" id="txtpublicaradio" >



</div>



<div class="form-horizontal col-md-6 ">
<label>Fecha de la transmision:</label>
<input type="date" class="form-control" name="txtfechatraradio" id="txtfechatraradio" >

<label>Lugar de la transmision:</label>
<input class="form-control" type="text" name="txtlugartraradio" id="txtlugartraradio">


<label>Contenido de la emision:</label>
<textarea class="form-control"  name="txtcontenidoRadioE" id="txtcontenidoRadioE" rows="5"></textarea>


<br>
<br>
</div>

<div class=" col-lg-offset-5">

<br>
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
