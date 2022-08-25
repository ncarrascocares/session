<?php

    /**Recordar que tanto para iniciar una nueva sesion como para reaunudar una sesion existente
     * siempre se tiene que hacer con session_start() sin excepción
     */

     session_start();
     //echo session_id();
     $_SESSION['usuario'] = 'Nicolas85'; // creación de la sesion 'usuario'
     echo $_SESSION['usuario']; //Nicolas85
?>