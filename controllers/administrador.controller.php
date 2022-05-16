<?php
$adm = $_SESSION['usuario'] ?? false;

if ($adm == 'admin'){
    require("views/administrador.view.php");
}