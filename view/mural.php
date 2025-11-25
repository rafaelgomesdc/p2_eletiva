<?php
function ConexaoBD()
{
    $mysqli = new mysqli("localhost", "root", "", "db_p2_eletiva");
    return $mysqli;
}

function GetNome($codigo)
{
    $mysqli = ConexaoBD();

    $sql_code = "SELECT nome FROM jogos WHERE codigo = '{$codigo}'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execucao do codigio SQL: " . $mysqli->error);

    echo $nome;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackFriday</title>
</head>
<body>
    <section class="mural">
        <h1>BlackFriday</h1>
        <div class="mural-jogos">
            <div class="jogo">
                <h1>
                    <?php
                    GetNome(1);
                    ?>
                </h1>
                <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores similique aut fugit tempore aspernatur fuga ut laudantium deserunt repellendus, iure corporis, dicta distinctio? Animi earum dolore facere dolor vero.</p>
                <p class="preco-padrao">R$ 99,99</p>
                <p class="preco-desconto">R$ 00,00</p>
            </div>
        </div>
    </section>

    <section class="cadastro-jogos">
        <div class="formulario">
            <form action="../processamento/processamento.php" method="post">
                <h1>Cadastrar Jogo</h1>
                <input type="text" name="inputNome" placeholder="Nome">
                <input type="text" name="inputDescricao" placeholder="Descrição">
                <input type="text" name="inputPrecoOriginal" placeholder="Preço Original">
                <input type="text" name="inputPrecoPromocional" placeholder="Preço Promocional">
                <input type="hidden" name="acao" value="cadastrar">
                <input type="submit" placeholder="Cadastrar">
            </form>
        </div>
    </section>
</body>
</html>