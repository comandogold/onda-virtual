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
    
    
    <label >Titulo de la produccion en su idioma original:</label>
<input class="form-control" type="text" name="txttituloProOri" id="txttituloProOri">

    <label >Titulo de la produccion traducida al castellano:</label>
<input class="form-control" type="text" name="txttituloProCas" id="txttituloProCas">


    <label >Nombre del productor:</label>
<input class="form-control" type="text" name="txtnombrePros" id="txtnombrePros">


<label>Domicilio del productor:</label>
<textarea class="form-control" type="text" name="txtdomicilioPros" id="txtdomicilioPros" rows="4"></textarea>




</div>



<div class="form-horizontal col-md-6 ">
    <label>Año de la fijacion:</label>
<input type="date" class="form-control" name="txtanofijac" id="txtanofijac" >

<label>Año de su primera publicacion:</label>
<input type="date" class="form-control" name="txtanopripub" id="xtanopripub" >

<label>Titulos de las obras contenidas en la produccion:</label>
<textarea class="form-control" type="text" name="txttituloobraproc" id="txttituloobraproc"></textarea>


<label>Nombre de sus respectivos autores:</label>
<textarea class="form-control" type="text" name="txtnombreResAut" id="txtnombreResAut"></textarea>

<label>Nombre de los artistas, interpretes o ejecutantes:</label>
<textarea class="form-control" type="text" name="txtartistiEjecu" id="txtartistiEjecu"></textarea>


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
