<?php

    #Dejaremos ya iniciada una sesión
    session_start();

    #aqui copiaremos nuestro hash MD5 obtenido con php-cli
    const HASH_ACCESO = "85ce93e9490c0fe6a6431f45c8837de8";

    #formulario.html será el pida el ingreso y pass al usuario
    const PAGINA_LOGIN = "formulario.html";

    /**Esta seá una página cualquier, con acceso restringido, a la cual
     * redirigir el usuario despúes de iniciar su sesión en el sistema
     */
    
    const PAGINA_RESTRINGIDA_POR_DEFECTO = "pagina_de_muestra.php";
?>