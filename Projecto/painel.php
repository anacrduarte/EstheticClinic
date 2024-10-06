
<?php
include "header.php";
?>
<?php
if(!isset($_SESSION)) {
    session_start();
}

else if(!isset($_SESSION['id_user'])) {
    die("Não pode acessar esta página porque não tem sessão iniciada.<p><a href=\"index.php\">Entrar</a></p>");
}



?>

<section id="info" class="container">
    <div class="row">
        <div class="col">
            <h2>Área do Cliente</h2>
        </div>    
    </div>
    
    <div class="row" id = "bv">   
             <div class="col-11" >
                <p style="font-size: 27px;"> Bem Vindo(a): <?php echo $_SESSION['nome'];?></p>
             </div>
            <div class=col-1 style=" align-items: center;">
                  <p>
                  <a href="login.php" style="font-size: 25px;">Sair</a>
                 </p> 
            </div>
    </div>

    <section id="vv" class="container">
        <div class="row" id="ltr">
                <div class="col-7" >
                <br>
                <br>
                <p>Marcações:</p>
                <form action="/action_page.php">
                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                        <option selected>Escolher Serviço</option>
                        <option value="1">Manicure</option>
                        <option value="2">Pedicure</option>
                        <option value="3">Unhas de gel</option>
                        <option value="4">Unhas de acrílico</option>
                        <option value="5">Gelinho</option>
                        <option value="6">Calista</option>
                        <option value="7">Epilação</option>
                        <option value="8">Maquilhagem</option>
                    </select>
                        <br>
                        <label for="birthdaytime">Marcação (Data e Hora):</label>
                        <input type="datetime-local" id="birthdaytime" name="birthdaytime"> 
                    <div class="mb-3">
                        <br>
                        <label for="exampleFormControlTextarea1" class="form-label">Mensagem:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                        <input type="submit" value="Enviar" id="bt-env">
                </form>
        </div>   
            <div class="col-5">
                 <img src="img/m27.jpg" alt="Manicure" class="img-fluid">
            </div>
  
    </section> 
</section>

<?php
include "footer.php";
?>