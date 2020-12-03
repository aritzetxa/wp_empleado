<?php
define('TABLA', 'empleados');
/*
 *  	
  Plugin Name: Empleados
  Description: Plugin de wordpres que permite insertar y mostrar empleados. Trabajo de clase
  Version: 1.0
  Author: Asier Cegama
 * 
 */
//require_once (plugin_dir_path(__FILE__) . 'config/config.php');
include_once(plugin_dir_path(__FILE__) . 'modelo/DataBase.php');



function crearTabla() {
    global $wpdb;
    $nomTabla = $wpdb->prefix.TABLA;
    //require_once( ABSPATH.'wp-admin/includes/upgrade.php' );
    //dbDelta('create table ' . $nomTabla . ' (nombre varchar(50), apellido varchar(50), nss varchar(50), fijo int(50), ventas float, tarifa float);');
    $wpdb->query('create table ' . $nomTabla . ' (nombre varchar(50), apellido varchar(50), nss varchar(50), fijo int(50), ventas float, tarifa float);');
}

function borrarTabla() {
    global $wpdb;
    $nomTabla = $wpdb->prefix . TABLA;

    $sql = "drop table if exists " . $nomTabla . ";";
    $wpdb->query($sql);
}

function insertar() {
    include(plugin_dir_path(__FILE__) . 'vistas/form_Insertar.php');
}

function listar() {
    $empleados = DataBase::mostrarEmpleado();
    include(plugin_dir_path(__FILE__) . 'vistas/form_Mostrar.php');
}

add_shortcode('Insertar_Empleado', 'insertar');
add_shortcode('Listar_Empleados', 'listar');

register_activation_hook(__FILE__, 'crearTabla');
register_deactivation_hook(__FILE__, 'borrarTabla');
