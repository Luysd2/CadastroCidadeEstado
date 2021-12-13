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
        $sql = "SELECT * FROM tb_estado WHERE id_estado= $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

        
    ?>
    <h3>Atualização de estado </h3>
    <form action="edit_uf_script.php" method="POST">
    <div class="">
        <div class="">
            <input name="estado" type="text" class="" value = "<?php echo $linha['estado']; ?>" >
        </div>
    </div>
    <br>
    <input type="hidden" name="id" value="<?php echo $linha['id_estado'] ?>">
    <input type="submit" value="Atualizar" name="cad">
    <a href="cadastroUF.php"> Voltar </a>  
    </form>

</body>
</html>