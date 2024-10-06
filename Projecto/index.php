<?php
include "header.php";
include "conexao.php";
?>



    <section class="container">
      <div class="row">
        <div class="col p-0">
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <?php      
                     $sql = "SELECT titulo, imagem, descricao
                      FROM carrossel
                      WHERE activo = 1
                      ";

                      $listaRegistos = mysqli_query($ligacaoBD, $sql);
                      $i = 0;
                      while($value = mysqli_fetch_assoc($listaRegistos)){

                ?>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>" <?= ($i == 0) ? "class='active'" : '' ?>></button>
                  <?php
                     $i++;
                     }
                  ?>

            </div>
            <div class="carousel-inner">
                <?php  
                     $i = 0;
                     mysqli_data_seek($listaRegistos, 0); 
                     while ($value = mysqli_fetch_assoc($listaRegistos)) {
                     ?>
 
                     <div class="carousel-item <?= ($i == 0) ? "active" : '' ?>">
                         <img src="img/<?= $value['imagem'] ?>" class="d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                             <h5><?= $value['titulo'] ?></h5>
                             <p><?= $value['descricao'] ?></p>
                         </div>
                     </div>
 
                     <?php
                         $i++;
                     }
                     ?>  

                      
            </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Proximo</span>
                    </button>
          </div>
        </div>
      </div>
    </section>
      
   
  <script>

    const myCarouselElement = document.querySelector('#carouselExampleCaptions')
    
    const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 5000,
            touch: false
    }) 
  </script>
<?php
include "footer.php";
?>