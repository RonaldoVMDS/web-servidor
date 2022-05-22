<?php 
require('layout/base-html.php');
?>

<title>ERROR - RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <div class="container d-flex justify-content-center">
        <h1 class="text-danger">Ops, algo não ocorreu como esperado.</h1>
        <div class="border border-danger text-danger p-5 text-justify">
            Erro:
            <small class="d-block">
                <?= $erro ?>
            </small>
        </div>
    </div>
</body>

</html>