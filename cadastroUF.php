<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h3>Cadastro de estado </h3>
    <form action="cadastro_script.php" method="POST">
    <div class="">
        <div class="">
            <input name="estado" type="text" class="" placeholder="Estado" >
        </div>
    </div>
   
    <br>
    <input type="submit" value="Cadastrar" name="cad">
    <a href="index.php"> Voltar </a>  
    <br><br><br>
    <p>Se o estado já estiver cadastrado, clique em PROXIMO </p>
    <a href="cadastroCity.php"> Proximo </a>
    
    </form>

    <br>

    <tbody>
    <?php
    include "conexao.php";

    $sql = "SELECT * FROM tb_estado ";
    $dados = mysqli_query($conn , $sql);

            while($linha = mysqli_fetch_assoc($dados)){
                $cod_id = $linha['id_estado'];
                $estado = $linha['estado'];

                echo "<ol>
                        <li>$cod_id</li>
                        <li>$estado</li>
                        <a href='editUF.php?id=$cod_id'>Editar</a>  <a href='excluirUF.php?id=$cod_id'>Excluir</a> 
                    </ol>";
                    echo "<hr>";
            }

            
            ?>
    </tbody>
    
</body>
</html>