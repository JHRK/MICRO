<?php

    $host="localhost";
    $usuario="root";
    $senha="";
    $banco="bd_projeto";

    $mysqli=new mysqli($host,$usuario,$senha,$banco);

    
if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}
 

$TAGS = $_POST['tag'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$algo = $_POST['algo'];
 

$sql = "INSERT INTO bd_imagens (ID,Descrição,TAG,SRC) VALUES ('$TAGS', '$email', '$mensagem','$algo')";
 
if ($mysqli->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $mysqli->error;
}

$mysqli->close();

    


?>
