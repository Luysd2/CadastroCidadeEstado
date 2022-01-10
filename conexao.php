<?php
//conexao local
$server = "127.0.0.1";
$user = "root";
$pass = "";
$bd = "db_CE";



if($conn = mysqli_connect($server, $user, $pass, $bd)){
    //echo "deu certo";
}else{
    //echo "deu errado";
}
?>