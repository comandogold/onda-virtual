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
    
    
    <label >Naturaleza del contrato:</label>
<input class="form-control" type="text" name="txtnaturalezaContrato" id="txtnaturalezaContrato">

<label>Nombres de las partes intervinientes:</label>
<textarea class="form-control"  name="txtnombreparteInterv" id="txtnombreparteInterv"></textarea>



</div>



<div class="form-horizontal col-md-6 ">
<label>Fecha de la firma:</label>
<input type="date" class="form-control" name="txtfechaFirmaV" id="txtfechaFirmaV" >

<label>Ubicacion - Lugar:</label>
<input class="form-control" type="text" name="txtubicaV" id="txtubicaV">

<label>Comentario:</label>
<textarea class="form-control"  name="txtcomentarioV" id="txtcomentarioV"></textarea>



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
