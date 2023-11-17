<?php
include_once './header.php'
?> 

 <?php 


$host="localhost";
$usuario="root";
$senha="";
$banco="banco_teste";

$mysqli=new mysqli($host,$usuario,$senha,$banco);


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$seleciona = $_POST['Filtros']; 
$wrdsrc="SELECT SRC from teste_sql WHERE TAG LIKE '%".$seleciona."%' ;";
$selecionar=$mysqli->query($wrdsrc);
}

while ($row = $selecionar->fetch_assoc()) {
  echo $row['SRC'];
  echo ("<img src=".$row['SRC'].">");
}



$mysqli->close();

?>

 


<?php 
include_once './footer.php'
?>