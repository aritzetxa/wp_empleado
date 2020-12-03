<h1>Inicio Mostrar</h1>
<?php

if(isset($empleados)){
	if(!$empleados){
    	echo "<div>La base de datos esta vacia</div>";
	}else{
		foreach ($empleados as $empleado) {
			echo "<label id='nombre' >Nombre:</label>";
			echo $empleado->nombre;
			echo "<br /><br />";
			echo "<label id='apellido' >Apellido:</label>";
			echo $empleado->apellido;
			echo "<br/><br/>";
			echo "<label id='nss' >Numero de la seguridad social:</label>";
			echo $empleado->nss;
			echo "<br/><br/>";
			echo "<label id='fijo' >Fijo:</label>";
			echo $empleado->fijo;
			echo "<br/><br/>";
			echo "<label id='ventas' >Ventas brutas:</label>";
			echo $empleado->ventas;
			echo "<br/><br/>";
			echo "<label id='tarifa' >Tarifa comisión:</label>";
			echo $empleado->tarifa;
			echo "<br/><br/>";
			echo "<hr/>";
		}
	}
}

?>
<h1>Fin mostrar</h1>


