<?php include"confing.php";?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include FOLDER_TEMPLATE."head.php";?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="estilos.css">
     <link rel="stylesheet" type="text/css" href="assets/css/indexcss.css">
<body class="fondo">    
<div class="fondonegro">
   
       

                       

        <!-- /. NAV SIDE  -->
        
            <div id="page-nner">
              
                    <div class="col-md-12" name="lol">
                        <br>
                        <br>
                        <br>

                        <section id="sinopsi">

                    <img src="<?=URL_IMG?>iconoProyecto.ico" id="logoo"/><label id="iver">iverstock</label>
                         <center> <h2 id="titulo">Regístrate</h2></center>
                       <br>
                     <div>
                     	<form class="formulario" method="POST" action="<?=URL_PROY?>controllers/processaprendiz.php">
                     		<label id="registrate">Cédula</label>
                        <input type="number" name="cedula" class="form-control" id="logi" placeholder="Cedula del Aprendiz">

                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="logi" placeholder="Digite el nombre del Aprendiz">

                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="logi" placeholder="Digite el apellido del Aprendiz">

                        <label>Correo</label>
                        <input type="text" name="correo" class="form-control" id="logi" placeholder="Digite el correo del Aprendiz">

                        <label>Género</label>
                        <select name="genero" class="form-control" id="logi">
                            <option>Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                        
                        <label>Celular</label>
                        <input type="number" name="celular" class="form-control" id="logi" placeholder="Digite el celular del Aprendiz">

                        <label>Fecha</label>
                        <input type="date" name="fecha" class="form-control" id="logi" placeholder="Digite fecha de nacimiento">

                        <label>Especialidad</label>
                        <input type="text" name="carrera" class="form-control" id="logi" placeholder="Digite carrera del Aprendiz">

                        <label>Ficha</label>
                        <input type="number" name="ficha" class="form-control" id="logi" placeholder="Digite la ficha del Aprendiz">
                     			<br>
                     			<button type="submit" id="boton" name="btningresar" class="btn btn-success">Regístrarse</button>   
                     	</form>
                     </div>
                           </section>
                   
                </div>              
                 <!-- /. ROW  -->
            
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
           
         <!-- /. PAGE WRAPPER  -->
        </div> 
        <?php include FOLDER_TEMPLATE."footer.php";?>
        <?php include FOLDER_TEMPLATE."scripts.php";?>
</body>
</html>
