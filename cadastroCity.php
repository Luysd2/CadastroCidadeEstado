<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h3>Cadastro de cidade </h3>
    <form action="cadastro_final.php" method="POST">
    <div class="">
        <div class="">
            <input name="cidade" type="text" class="" placeholder="Cidade" >
        </div>
    </div>
    <br><br>

        <label for="">Escolha o estado</label> <br>
        <select name="s_estado" id="" >

            <?php
            include "conexao.php";
            $sql = "SELECT * FROM tb_estado ORDER BY estado";
            $resultado = mysqli_query($conn, $sql);
            while($recebe = mysqli_fetch_assoc($resultado)){
                $uf = $recebe['estado'];
                
                echo "<option > $uf </option>";
            }
            ?>
            
        </select>

    <br><br>
    <input type="submit" value="Cadastrar" name="cad">
    <a href="cadastroUF.php"> Voltar </a>
    </form>
</body>
</html>