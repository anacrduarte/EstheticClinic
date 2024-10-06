<?php
include "header.php";
include "conexao.php";
?>

        
       

  <section  id = "info" class="container">
    <div class="row">
        <div class="col">
            <h2>Contactos</h2>
         </div>
    </div>
    <div id="contactos" class="row">
        <div class="col-4">
          <p>
            <br>
            Visite-nos  
             <br>Rua de Camões
             <br>Nº 125
             <br>Braga
             <br>Portugal
             <br>   
             <br>E-mail
             <br><a href="a.duarte@mail.com">a.duarte@mail.com</a>
             <br> 
             <br>Telefone
             <br><a href="912345678">912345678</a>
          </p>
        </div>

        <div class="col-4">
            <form action="contactos.php" method="POST" onsubmit="return validarForm();">
                <div class="mb-3">
                    <label for="formNome" class="form-label">Nome</label>
                    <input type="text" required class="form-control" id="formNome" name="formNome" >
                </div>
                <div class="mb-3">
                    <label for="formEmail" class="form-label">Email</label>
                    <input type="email" required class="form-control" id="formEmail" name="formEmail" >
                </div>
                <div class="mb-3">
                    <label for="formMensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="formMensagem" name="formMensagem" rows="5" ></textarea>
                </div>
                      
                    
                <div class="mb-3 form-check">
                   <input type="checkbox" class="form-check-input" id="formNewsletter" name="formNewsletter" >
                   <label class="form-check-label" for="formNewsletter">Quero subscrever!</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar mensagem</button>
            </form>
        </div>

        <div class="col-4" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15046.930902833918!2d-8.435501180231109!3d41.55432173798171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24fe94c4f62f1f%3A0xf496bd481c1993bf!2sR.%20de%20Cam%C3%B5es%2C%20Braga!5e0!3m2!1spt-PT!2spt!4v1701251530339!5m2!1spt-PT!2spt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
  </section>


<?php
include "footer.php";
?>