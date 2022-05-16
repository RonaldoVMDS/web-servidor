<?php
if ($_SESSION['usuario'] !== 'admin') {
    header('Location: login.php');
}
require('views/cadastro-produtos.view.php');
