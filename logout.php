<?php
    session_start();//inicia a sessão
    session_destroy();//destrói a sessão iniciada 
    header('Location: index.php'); //faz chamada para a tela inicial