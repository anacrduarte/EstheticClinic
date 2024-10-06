
<?php
include "header.php";
?>


<?php

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
    
        $email = $ligacaoBD->real_escape_string($_POST['email']);
        $senha = $ligacaoBD->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
    $sql_exec = $ligacaoBD->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    if(password_verify($senha, $usuario['senha'])){
        if(!isset($_SESSION)) {
            session_start();
        }

       $_SESSION['id_user'] = $usuario['id_user'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: painel.php");

    }else{
        echo "Falha! E-mail ou senha incorretos";
    }
    }
}
?>

<section id="info" class="container">
    <div class="row">
        <div class="col">
            <h2>Login</h2>
        </div>
    </div>
    <div class="row" id="logs">
        <div class="col-4" >
            <img src="img/m35.jpg" alt="Manicure" class="img-fluid">
        </div>
    <div class="col-4" >
        <p>Faça as suas marcações. Acesse à sua área de cliente.</p>
            <form action="" method="POST">
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" class="form-control"  id="email" name="email" >
                </div>
                <div class="mb-3">
                        <label>Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" >
                </div>
                        <button id="bt-entrar"type="submit">Entrar</button>    
            </form>
    </div>
   
      
    <div class="vstack gap-2 col-md-3 mx-auto" id="borda">   
        <p>
            <br>
            Ainda não tem conta? Crie aqui!
            <br>
            </p> 
            <a href="criarconta.php">
          <button  id="bt-entrar" title="Ir para Marcações" >Criar Conta</button> </a>
    </div>

</section>

<?php
include "footer.php";
?>