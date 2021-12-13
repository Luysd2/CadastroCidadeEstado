<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização</title>
</head>
<body>
    <?php
    include "conexao.php";
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM tb_cidade WHERE id_cidade= $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

        
    ?>
    <h3>Tela de atualização </h3>
    <form action="edit_script.php" method="POST">
    <div class="">
        <div class="">
            <input name="estado" type="text" class="" placeholder="Estado" value = "<?php echo $linha['c_estado']; ?>">
        </div>
    </div>
    <br>
    <div class="">
        <div class="">
            <input name="cidade" type="text" class="" placeholder="Cidade" value = "<?php echo $linha['cidade']; ?>">
        </div>
    </div>
    <br>
    <input type="submit" value="Atualizar" name="cad">
    <input type="hidden" name="id" value="<?php echo $linha['id_cidade'] ?>">
    <a href="pesquisa.php"> Voltar </a>
    </form>
</body>
</html>