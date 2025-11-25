<?php

function ConexaoBD()
{
    $mysqli = new mysqli("localhost", "root", "", "db_p2_eletiva");
    return $mysqli;
}

function InserirJogo()
{
    $mysqli = ConexaoBD();

    $nome = $_POST['inputNome'];
    $descricao = $_POST['inputDescricao'];
    $preco_original = $_POST['inputPrecoOriginal'];
    $preco_promocional = $_POST['inputPrecoPromocional'];

    $sql_code = "INSERT INTO jogos (nome, descricao, preco_padrao, preco_desconto) VALUES ('{$nome}', '{$descricao}', '{$preco_original}', '{$preco_promocional}')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do código SQL: " . $mysqli->error);

    echo "Jogo Cadastrado com sucesso.";
    include ('../view/index.html');
}

if ($_POST['acao'] == 'cadastrar')
    InserirJogo();

?>