<?php

    //CRIANDO UMA SESSÃO:
    session_start();

    //VERIFICANDO O ID DA SESSÃO:
    echo session_id();

    //CRIANDO VARIÁVEIS DE SESSÃO
    $_SESSION["nome"] = "KELLY MARQUES BALAZSHAZI";

    $nome = "KELLY MARQUES BALAZSHAZI";

    echo $nome;

?>