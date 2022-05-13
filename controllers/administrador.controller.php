<?php

    $adm = $_SESSION['usuario'] ?? false;

    if ($adm == 'Administrador') : 
    
    require("views/administrador.view.php");

    '';
    endif; ?>