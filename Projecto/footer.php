<footer class="container"  >
        <div class="row">
            <div class="col-3">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                         <i class="fa-solid fa-copyright d-lg-none"></i>
                         <span class="d-none d-lg-inline">COPYRIGHT</span>
                        <span>2023</span>
                     </li>
                 </ul>
            </div>

            <div class="col d-flex justify-content-end">
                <ul class="list-group list-group-horizontal">
                    <?php

                        $sql = "SELECT nome, link, classe 
                        FROM redesSociais
                        WHERE activo = 1
                        ";


                        $listaRegistos = mysqli_query($ligacaoBD, $sql);

                        while($value = mysqli_fetch_assoc($listaRegistos)){

                    ?>
                    <li class="list-group-item">
                        <a href="<?= $value['link'] ?>" target="_blank">
                        <i class="<?= $value["classe"]?>"></i>
                        <span class="d-none d-lg-inline"><?= $value["nome"]?></span>
                        </a>
                    </li>
             <?php
                 }
             ?>
                    
                
               </ul>
            </div>
        </div>
    </footer>
    </body>
</html>