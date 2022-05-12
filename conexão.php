<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $database="projeto";

    $conexao= mysqli_connect ($servidor, $usuario, $senha, $database);

    if($conexao){
        echo "Conexão bem-sucedida";
    }else{
        echo "Falha na conexão";
    }

    $query = "INSERT INTO `dados` ( `nome` , `email` , 'cpf' , `senha` ) 
VALUES ('$nome', '$email', '$cpf', '$senha'
)";
mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
?>