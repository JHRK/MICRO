<?php
include_once './header.php'
?> 

 <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesquisa= $_POST['pesquisa-barra'];
    if (empty($pesquisa)) {
      echo "Pesquise algo.";
    } else {
      echo $pesquisa;
    }
  }

var_dump($_POST)
 
 ?>

<?php 
include_once './footer.php'
?>