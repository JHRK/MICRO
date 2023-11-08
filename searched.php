<?php
include_once './header.php'
?> 

 <?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesquisa= $_POST['pesquisa_sub'];
    if (empty($pesquisa)) {
      echo "Não funfou.";
    } else {
      echo "$pesquisa";
    }
  }

 ?>

<?php 
include_once './footer.php'
?>