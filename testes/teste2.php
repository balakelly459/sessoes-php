<?php


    //RECUPERANDO A SESSÃO CRIADA:
    session_start();

    echo session_id();

    // echo $nome;

    //EXIBIBNDO DADOS DE UMA VARIÁVEL DE SESSÃO
    echo $_SESSION["nome"];


?>