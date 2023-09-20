<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-cadastro.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="container-cadastro">
        <div class="conteudo-container-cadastro">
            <h1 id="titulo-container">Cadastre-se</h1>
            <div class="inputCadastro">
                <input type="text" id="nome" name="nome" placeholder="Nome">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="password" id="senha" name="senha" placeholder="Senha">
            </div>
            <div class="entrar-sociais">
                <p id="entrar-com">ou cadastre-se com:</p>

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

            <p id="subtitulo">Ao prosseguir, você concorda com os <span id="amarelo">Termos de Uso</span> e a <span id="amarelo">Política de Privacidade</span> do CefetMUSIC</p>

            <button class="btn">
                <span class="shadow"><a href="Explorar.php"></a></span>
                <span class="edge"><a href="Explorar.php"></a></span>
                <span class="front text"> <a href="Explorar.php">CADASTRAR</a></span>
            </button>

            <p id="opcao">Você tem uma conta? <a id="amarelo" href="Login.php">Faça Login</a></p>
        </div>
    </div>

    <div class="imgCadastre">
        <img src="img/Headphone-rafiki.svg" alt="musicgirl">
    </div>

</body>

</html>