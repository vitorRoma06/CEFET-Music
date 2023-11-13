<?php
include('conexao.php');

function teste()
{

    include('conexao.php');
    if (isset($_POST['email']) || isset($_POST['senha'])) {
        if (strlen($_POST['email'] == 0) || strlen($_POST['senha'] == 0)) {
            echo "Preencha seu email e senha.";
        } else if (strlen($_POST['email']) == 0) {
            echo "Preencha seu email.";
        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha.";
        } else {    

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $qt = $sql_query->num_rows;

            if ($qt == 1) {

                $usuario = $sql_query->fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: home.php");


            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-cadastro.css">
    <title>Login</title>
</head>

<body>
    <div class="imgCadastro">
        <img src="img/Lo-ficoncept-rafiki.svg" alt="studyboy">
    </div>

    <div class="container">
        <div class="conteudo-container">
            <h1 id="titulo-container">Login</h1>
            <p id="subtitulo">De volta ao ritmo: sua música favorita está esperando por você. Faça login agora!</p>



            <!-- FORMULARIO -->
            <form class="inputCadastro" method="POST" action="">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="password" id="senha" name="senha" placeholder="Senha">

                <p class="php"><?php teste() ?></p>
                <div class="entrar-sociais">
                    <p id="entrar-com">Entrar com:</p>

                    <div class="sociais">
                        <div class="elementsSociais">
                            <div class="blocoo">
                                <img class="img-social" src="img/deezer.svg">
                                <div class="bloco"></div>
                            </div>
                        </div>
                        <div class="elementsSociais">
                            <div class="blocoo">
                                <img class="img-social" src="img/spotify.svg">
                                <div class="bloco"></div>
                            </div>
                        </div>
                        <div class="elementsSociais">
                            <div class="blocoo">
                                <img class="img-social" src="img/google.svg">
                                <div class="bloco"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front text">
                        <p>ENTRAR</p>
                    </span>
                </button>

            </form>
            <!-- FORMULARIO -->
            <p id="opcao">Você não tem uma conta? <a id="amarelo" href="cadastro.php">Cadastre-se</a></p>
        </div>
    </div>

</body>

</html>