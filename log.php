<?php

$DATETIME = date("Y-m-d h:m:s");

$ERRO = "ERRO: ao consultar lista de filmes";

error_log("$DATETIME - $ERRO\n", 3, "./log.txt"); // Segundo argumento, indica como sera salvo esse log -> 3 = Arquivo
echo "Log adicionado!\n";