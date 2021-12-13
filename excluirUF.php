<?php
include "conexao.php";
//echo "teste";
$id = mysqli_real_escape_string($conn, trim($_GET['id']));

//$sql = "INSERT INTO `cidadeestado` (`estado`, `cidade`, `data_cadastro`) VALUES ('$estado', '$cidade', NOW())";
//$sql = "UPDATE `cidadeestado` SET `estado` = '$estado', `cidade` = '$cidade' WHERE idcidadeestado = $id";
$sql = "DELETE FROM `tb_estado` WHERE id_estado = $id";
//echo $sql . "<br>";


if(mysqli_query($conn, $sql)){
    header("Location: cadastroUF.php");
    echo "certo";
}else{
    //header("Location: cadastro.php");
    echo "errado";
}
?>