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
    
    
    <label >Naturaleza del acto o contrato:</label>
<input class="form-control" type="text" name="txtnaturalezaActo" id="txtnaturalezaActo">

<label>Nombres de las partes intervinientes:</label>
<input class="form-control" type="text" name="txtnombreIntervi" id="txtnombreIntervi">

<label>Cuantia del contrato:</label>
<input class="form-control" type="text" name="txtcuantiaContr" id="txtcuantiaContr">

<label>Nombres de las partes intervinientes:</label>
<input class="form-control" type="text" name="txtnombreparIntervi" id="txtnombreparIntervi">



</div>



<div class="form-horizontal col-md-6 ">
<label>Modalidades de explotacion transferidas:</label>
<input type="text" class="form-control" name="txtmodatrans" id="txtmodatrans" >

<label>Plazo de duracion del contrato:</label>
<input type="text" class="form-control" name="txtduracionplacont" id="txtduracionplacont" >

<label>Lugar del contrato:</label>
<input type="text" class="form-control" name="txtlugarContratoPla" id="txtlugarContratoPla" >

<label>Fecha del contrato:</label>
<input type="date" class="form-control" name="txtfechaContratoPla" id="txtfechaContratoPla"  placeholder="23/11/2020">

<label>Fecha de la firma:</label>
<input type="date" class="form-control" name="txtfechaFirmaPla" id="txtfechaFirmaPla"  placeholder="23/11/2020">

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
