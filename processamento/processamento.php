<?php

function ConexaoBD()
{
    $msqli = new msqli("localhost", "root", "", "db_p2_eletiva");
    return $msqli;
}

function InserirJogo()
{
    $msqli = ConexaoBD();
}

?>