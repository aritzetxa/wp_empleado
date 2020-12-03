<?php

class DataBase {

    function agregarEmpleado() {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nss = $_POST['nss'];
        $fijo = $_POST['fijo'];
        $ventas = $_POST['ventas'];
        $tarifa = $_POST['tarifa'];

        global $wpdb;

        $nomTabla = $wpdb->prefix .TABLA;
        $sql = "insert into " . $nomTabla . " values ('" . $nombre . "','" . $apellido . "','" . $nss . "'," . $fijo . "," . $ventas . "," . $tarifa . ");";
        $wpdb->query($sql);
    }

    function mostrarEmpleado() {
        global $wpdb;
        $nomTabla = $wpdb->prefix .TABLA;
        $sql = "select * from " . $nomTabla . ";";
        $resul = $wpdb->get_results($sql);

        if (count($resul) == 0) {
            return false;
        }
        return $resul;
    }

    function comprobarEmpleado($nss) {
        global $wpdb;
        $nomTabla = $wpdb->prefix .TABLA;
        $sql = "select * from " . $nomTabla . " where nss like '" . $nss . "' ;";
        $resul = $wpdb->get_results($sql);
        if (count($resul) > 0) {
            return true;
        }
        return false;
    }

}
