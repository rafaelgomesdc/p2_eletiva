<?php

function ConexaoBD()
{
    $msqli = new msqli("localhost", "root", "", "db_p2_eletiva");
    return $msqli;
}

function InserirJogo()
{
    $msqli = ConexaoBD();

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDescricao'];
    $preco_padrao = $_POST['inputPrecoPadrao'];
    $preco_padrao = $_POST['inputPrecoDesconto'];

    $sql_code = "INSERT INTO jogos (nome, descricao, preco_padrao, preco_desconto) VALUES ('{$nome}', '{$descricao}', '{$preco_padrao}', '{$preco_desconto}')";
    $sql_query = $msqli->query($sql_code) or die("Falha na execucao do código SQL: " . $msqli->error);

    echo "Jogo Cadastrado com sucesso.";
}

if ($_POST['acao'] == 'cadastrar')
    InserirJogo();

?>