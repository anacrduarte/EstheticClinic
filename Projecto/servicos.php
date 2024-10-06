<?php
include "header.php";
include "conexao.php";
?>



<section id="info" class="container">
        <div class="row">
            <div class="col">
                    <h2>Serviços</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="cartao">
              <?php

              $sql = "SELECT titulo, imagem, descricao
              FROM servicos
              WHERE activo = 1
              ";


              $listaRegistos = mysqli_query($ligacaoBD, $sql);

              while($value = mysqli_fetch_assoc($listaRegistos)){

              ?>

            <div class="col">
              <div class="card" >
                <img src="img/<?= $value["imagem"] ?>" class="card-img-top" alt="<?= $value["titulo"] ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $value["titulo"] ?></h5>
                  <p class="card-text"><?= $value["descricao"] ?></p>
                </div>
              </div>
            </div>

              <?php
                }
              ?>
          </div>
</section>


<?php
include "footer.php";
?>