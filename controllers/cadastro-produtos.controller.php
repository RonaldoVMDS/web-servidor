<?php
if ($_SESSION['usuario'] !== 'Administrador') {
    header('Location: login.php');
}
require('views/cadastro-produtos.view.php');
