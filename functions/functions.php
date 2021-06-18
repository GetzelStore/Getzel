<?php 

function obtenerPaginaActual() {
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);
    return $pagina;
}

function revisar_pagina_login() {
    /* Valida que exista user */
    if (isset($_GET['user'])) {
        if ($_GET['user'] != '') {
            return true;
        }
    }else {
        return false;
    }
  
}
