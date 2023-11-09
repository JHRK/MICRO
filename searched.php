<?php
include_once './header.php'
?> 

 <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesquisa = $_POST['pesquisa_sub'];

    //Ele precisa buscar com query no BD, com uma variavel. O select está funfando

    $busca = mysql_query("echo "SELECT SRC,Nome FROM `BD_IMAGENS` WHERE Nome LIKE ".$pesquisa.""");
    SELECT SRC FROM `teste_sql` WHERE Nome LIKE '%Esquema%'



    if (empty($pesquisa)) {
      echo "Não funfou.";
    } else {
      ;
    }
  }

 ?>

<?php 
include_once './footer.php'
?>