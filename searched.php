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
            $pesquisa = $_POST['pesquisa_sub']; 
            $wrdsrc="SELECT SRC from teste_sql WHERE Nome LIKE '%".$pesquisa."%' ;";
            $pesquisar=$mysqli->query($wrdsrc);
            }
            
              while ($row = $pesquisar->fetch_assoc()) {
                echo $row['SRC'];
                echo ("<img src=".$row['SRC'].">");
            }

            
        
            $mysqli->close();

?>

<?php 
include_once './footer.php'
?>