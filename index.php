<?php
include_once './header.php'
?>
      <main class="container-fluid col-8">
              
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col-5" style="border-right:5px solid #2041fe"><h2>Acervo<img src=".\arrow_right_alt_FILL0_wght400_GRAD0_opsz24.png"></h2>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col-5" style="border-right:5px solid #2041fe"><h2>Bactérias<img src=".\arrow_right_alt_FILL0_wght400_GRAD0_opsz24.png"></h2>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col-5" style="border-right:5px solid #2041fe"><h2>Tecidos<img src=".\arrow_right_alt_FILL0_wght400_GRAD0_opsz24.png"></h2>
                  <p>Imagens de diferentes espécies e estruturas observadas em microscópios.</p></div>
                </div>
              </section>
              <section class="col-lg-12 mt-3">
                <div class="row" >
                  <div class="col-5" style="border-right:5px solid #2041fe"><h2><a href="Microscópios.php">Métodos</a><img src=".\arrow_right_alt_FILL0_wght400_GRAD0_opsz24.png"></h2>
                  <p>Entenda a diferença entre os métodos de observação.</p></div>
                </div>
              </section>

      </main>   
      <aside class="container-fluid col-4">
        <h1>Filtros</h1>
        <form action="./selected.php" name="Filtros" method="POST" >
          <input type="radio" id="html" name="T1" value="Eletrônico">
          <label for="T1">Eletrônico</label><br>
          <input type="radio" id="html" name="T2" value="Óptico">
          <label for="T2">Óptico</label><br>
          <input type="radio" id="html" name="T3" value="Bactérias">
          <label for="T3">Bactérias</label><br>
          <input type="radio" id="html" name="T4" value="Protozoários">
          <label for="T4">Protozoários</label><br>
          <input type="radio" id="html" name="T5" value="Inorgânicos">
          <label for="T5">Inorgânicos</label><br>
          <input type="submit" action="./selected.php" method="GET" for="Filtros" >
        </form>

      </aside>
</div>
  
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script src="script.js"></script>

<?php 
include_once './footer.php'
?>