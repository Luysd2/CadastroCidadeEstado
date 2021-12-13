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
    <p>Aqui neste tela vc pode cadastrar o estado e cidade</p>

    <?php
    include "conexao.php";
    /*
    $sql ="SELECT count(cidade) FROM cidadeestado";
    $d = mysqli_query($conn, $sql);
    //$x = mysqli_fetch_array($d);
    var_dump($x);
    echo "<br>";
    print_r($x);
    echo "<br>";
    //echo mysqli_result($d);

    //mysqli_num_rows()
*/
    $sql = "SELECT count(cidade) FROM cidadeestado";
    $result = mysqli_query($conn, $sql);

   // $linhas = mysqli_num_rows($result);
    //echo "Quantidade de cidades é: " . $linhas;
   // echo "<br>";
   // printf("Quantidade de cidades é: " . $linhas);

    ?>
<br><br><br>
    <a href="cadastroUF.php">Cadastrar</a>
    <br><br>
    <a href="pesquisa.php">Pesquisar</a>
</body>
</html>