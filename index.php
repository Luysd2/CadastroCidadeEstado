<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h3>tela inicial</h3>

    <?php
    include "conexao.php";

     // Tabela tb_estado
    $query = "SELECT count(*) as x FROM tb_estado";
    $linha = mysqli_query($conn, $query);
    $d = mysqli_fetch_assoc($linha);
    echo "Quantidade de estados cadastrado é: " . $d['x'];
    
    echo "<br>";
    
    // Tabela tb_cidade
    //$sql = "SELECT count(cidade) FROM tb_cidade";
    $sql = "SELECT count(*) as total FROM tb_cidade";
    $row = mysqli_query($conn, $sql);
    $x = mysqli_fetch_assoc($row);
    //var_dump($x);die;
    echo "Quantidade de cidades cadastradas é: " . $x['total'];

    
    ?>

<br><br><br>
    <a href="cadastroUF.php">Cadastrar</a>
    <br><br>
    <a href="pesquisa.php">Pesquisar</a>
</body>
</html>