<?php
include_once './header.php'
?> 

 <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesquisa = $_POST['pesquisa_sub'];

    //Ele precisa buscar com query no BD, com uma variavel. O select está funfando

    $busca = "SELECT SRC FROM `BD_IMAGENS` WHERE Nome LIKE %".$pesquisa."%";
    $result = mysqli_query($busca);
      while($row = mysqli_fetch_array($result)) {
        echo $row['SRC']; 
    }
    echo [$result];

}
?>

<?php 
include_once './footer.php'
?>