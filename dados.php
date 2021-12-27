<?php
    include("conexao.php");
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $sql = "INSERT INTO head(nome, cpf, email) 
                VALUES ('$nome', '$cpf', '$email')";
        if(mysqli_query($conexao, $sql)){
            echo "Usuário cadastrado";
        }
        mysqli_close($conexao);

?>