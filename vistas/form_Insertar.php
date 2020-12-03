<h1>Inicio insertar</h1>
<?php

  require_once(plugin_dir_path(__FILE__) . '/../modelo/DataBase.php' );
  /*
  if(DataBase::comprobarEmpleado($_POST['nss'])){
      $error = "<div>El numero de segurodad social introducido ya existe en la base de datos</div>";
  }*/
  
  if(isset($_POST['insertar'])){
      if(DataBase::comprobarEmpleado($_POST['nss']) == false){
      DataBase::agregarEmpleado();
      }else{
          echo "<div>El numero de segurodad social introducido ya existe en la base de datos</div>";
      }
  }
  
?>  
   <form name="formu" method="post">
           <label id="nombre">Nombre</label>
           <input type="text" name="nombre" value="" required />
           <label id="apellido" >Apellido</label>
           <input type="text" name="apellido" value="" required/>
           <label id="nss" >N Seguridad Social</label> 
           <input type="text" name="nss" value="" required/>
           <label id="fijo" >Cantidad fija</label>
           <input type="text" name="fijo" value="" required/>
           <label id="ventas" >Ventas brutas</label>
           <input type="text" name="ventas" value="" required/>
           <label id="tarifa" >Comisión</label>
           
             <select name="tarifa" >
                <?php
                    for($i=2;$i<=30;$i=$i+4){
                        echo "<option value=$i>$i</option>";
                    }
                ?>
            </select>
            <br/><br/>
            <input type="submit" value="insertar" name="insertar" />
    </form>
  
  <h1>Fin insertar</h1>
