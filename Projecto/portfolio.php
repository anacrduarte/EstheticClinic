<?php
include "header.php";
include "conexao.php";
?>

<section id="info" class="container">
    <div class="row">
        <div class="col">
            <h2>Portfólio</h2>
        </div>
    </div>
 
 
<section id="galeria" class="container">
    <div class="row">
        <div class="col">
            <h3>Manicure</h3>
        </div>
    </div>
        <div class="row">

                <?php

                $sql = "SELECT ficheiro, titulo 
                 FROM imagem
                 WHERE activo = 1
                 
                 ";


                $listaRegistos = mysqli_query($ligacaoBD, $sql);

                while($value = mysqli_fetch_assoc($listaRegistos)){

                ?>

                <div class="col-6 col-md-6 col-lg-3 col-xxl-4">
                    <div class="item">
                        <a href="img/<?= $value["ficheiro"]?>" data-fancybox="lego" data-caption="<?= $value["titulo"] ?>">
                            <img src="img/<?= $value["ficheiro"] ?>" alt="">
                            <h5><?= $value["titulo"] ?></h5>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
</section>

<section id="galeria" class="container">
    <div class="row">
        <div class="col">
            <h3>Pedicure</h3>
        </div>
    </div>
        <div class="row">

                <?php

                $sql = "SELECT ficheiro, titulo 
                 FROM imagem_pedi
                 WHERE activo = 1
                 
                 ";


                $listaRegistos = mysqli_query($ligacaoBD, $sql);

                while($value = mysqli_fetch_assoc($listaRegistos)){

                ?>

                <div class="col-6 col-md-6 col-lg-3 col-xxl-4">
                    <div class="item">
                        <a href="img/<?= $value["ficheiro"]?>" data-fancybox="lego" data-caption="<?= $value["titulo"] ?>">
                            <img src="img/<?= $value["ficheiro"] ?>" alt="">
                            <h5><?= $value["titulo"] ?></h5>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
</section>

<section id="galeria" class="container">
    <div class="row">
        <div class="col">
            <h3>Maquilhagem</h3>
        </div>
    </div>
        <div class="row">

                <?php

                $sql = "SELECT ficheiro, titulo 
                 FROM imagem_mk
                 WHERE activo = 1
                 
                 ";


                $listaRegistos = mysqli_query($ligacaoBD, $sql);

                while($value = mysqli_fetch_assoc($listaRegistos)){

                ?>

                <div class="col-6 col-md-6 col-lg-3 col-xxl-4">
                    <div class="item">
                        <a href="img/<?= $value["ficheiro"]?>" data-fancybox="lego" data-caption="<?= $value["titulo"] ?>">
                            <img src="img/<?= $value["ficheiro"] ?>" alt="">
                            <h5><?= $value["titulo"] ?></h5>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
</section>

</section>   
   <script>
       
        Fancybox.bind("[data-fancybox]", {
      
        });
    
    </script>

<?php
include "footer.php";
?>