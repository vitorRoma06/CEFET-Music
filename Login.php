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

            <form class="inputCadastro" method="POST" action="php/login-email.php">
                <input type="text" id="email" name="email" placeholder= "Email">
                <input type="password" id="senha" name="senha" placeholder="Senha">
            </form>
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

            <button class="btn" onclick="submitForm()">
                <span class="shadow"><a href="Explorar.html"></a></span>
                <span class="edge"><a href="Explorar.html"></a></span>
                <span class="front text"> ENTRAR </span>
            </button>

            <script>
                function submitForm() {
                    document.querySelector('.inputCadastro').submit();
                }
            </script>

            <p id="opcao">Você não tem uma conta? <a id="amarelo" href="Cadastro.html">Cadastre-se</a></p>
        </div>
    </div>

</body>

</html>