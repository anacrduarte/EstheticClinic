

<?php
include "header.php";
?>

<section id="info" class="container">
    <div class="row">
        <div class="col">
            <h2>Criar Conta</h2>
        </div>
    </div>
    <?php

            if(isset($_POST['email']) || isset($_POST['senha'])|| isset($_POST['nome'])) {

                if(strlen($_POST['email']) == 0) {
                    echo "Preencha seu e-mail";
                } else if(strlen($_POST['senha']) == 0) {
                    echo "Preencha sua senha";
                } else if(strlen($_POST['nome']) == 0) {
                    echo "Preencha o seu nome";

                    }else{$firstname = $_POST['nome'];
                        $email = $_POST['email'];
                        $password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                                
                        $email = $ligacaoBD->real_escape_string($_POST['email']);
                        $senha = $ligacaoBD->real_escape_string($_POST['senha']);
                    
                        $sql_code = "SELECT * FROM user WHERE email = '$email' ";
                        $sql_query = $ligacaoBD->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
                    
                        $quantidade = $sql_query->num_rows;
                    
                        if($quantidade == 1) {
                            
                            $usuario = $sql_query->fetch_assoc();
                            echo "Este e-mail ja existe por favor insira outro.";
                
                        
                        }else{
                        
                        
                        $sql = "INSERT INTO user (nome, email, senha ) VALUES('$firstname', '$email', '$password')";
                                $listaRegistos = mysqli_query($ligacaoBD, $sql);
                                header("Location: painel.php");
                        };

                    }
            }
            ?>
 
   <div class = "form-criar">
       <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="foNome" class="form-label">Nome</label>
                <input type="text" class="form-control"  id="nome" name="nome" >
            </div>
            <div class="mb-3">
                <label>E-mail</label>
                <input type="text" class="form-control"  id="email" name="email" >
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" >
            </div>
            
            <button id ="bt-criar" type="submit">Criar</button>
        </form>
    </div>

</section>

<?php
include "footer.php";
?>