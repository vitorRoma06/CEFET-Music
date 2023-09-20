<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CefetMUSIC - Chats</title>
</head>

<body>
    <aside class="menu-lateral">
        <header class="menu-lateral-header">
            <a href="home.php">
                <div class="logo"><img src="img/logo.svg" alt="logo">
                    <span>Cefet<span id="blue">MUSIC</span></span>
                </div>
            </a>
        </header>

        <nav class="nav">
            <a href="home.php">
                <button>
                    <span>
                        <img src="img/explorar.svg">
                        <span>Explorar</span>
                    </span>
                </button>
            </a>
            <a href="musicas.php">
                <button>
                    <span>
                        <img src="img/music-note.svg">
                        <span>Músicas</span>
                    </span>
                </button>
            </a>
            <a href="comunidades.php">
                <button>
                    <span>
                        <img src="img/people.svg">
                        <span>Comunidades</span>
                    </span>
                </button>
            </a>
            <a href="chats.php">
                <button>
                    <span>
                        <img src="img/chat.svg">
                        <span>Chats</span>
                    </span>
                </button>
            </a>
            <a href="favoritos.php">
                <button>
                    <span>
                        <img src="img/coracao.svg">
                        <span>Favoritos</span>
                    </span>
                </button>
            </a>
            <a href="criar-playlist.php">
                <button>
                    <span>
                        <img src="img/add.svg">
                        <span>Criar Playlist</span>
                    </span>
                </button>
            </a>
        </nav>
        <hr>
        <button>
            <span>
                <img src="img/sair.svg">
                <span><a href="logout.php">Sair</a></span>
            </span>
        </button>
    </aside>

    <aside class="menu-lateral lateral-chats">
        <span id="titulo-chats">Amigos</span>
        <nav class="nav">

            <button id="chat-cpwellington">
                <span>
                    <img src="img/CPwellington.png">
                    <span>CPwellington</span>
                    <div class="status online"></div>
                </span>
            </button>

            <button id="chat-gates">
                <span>
                    <img src="img/bill.jpg">
                    <span>Gates</span>
                    <div class="status offline"></div>
                </span>
            </button>

            <button id="chat-monica">
                <span>
                    <img src="img/monica.jpg">
                    <span>Mônica</span>
                    <div class="status ausente"></div>
                </span>
            </button>

            <button id="chat-cebolinha">
                <span>
                    <img src="img/cebolinha.jpg">
                    <span>Cebolinha</span>
                    <div class="status online"></div>
                </span>
            </button>

            <button id="chat-bill">
                <span>
                    <img src="img/bill.jpg">
                    <span>Bill</span>
                    <div class="status online"></div>
                </span>
            </button>

            <button id="chat-jobs">
                <span>
                    <img src="img/jobs.png">
                    <span>Steve</span>
                    <div class="status offline"></div>
                </span>
            </button>
        </nav>
    </aside>

    <main class="principal">
        <header class="cabecalho cabecalho-chats">
            <section class="right-header">
                <section class="assist">
                    <button>
                        <img src="img/contraste.svg">
                    </button>
                    <button>
                        <img src="img/libras.svg">
                    </button>
                    <button>
                        <img src="img/fonte.svg">
                    </button>
                </section>
                <section class="cadastro">
                    <button>
                        <a href="cadastro.php">
                            <span>Cadastrar</span>
                        </a>
                    </button>
                    <button>
                        <a href="login.php">
                            <span>Entrar</span>
                        </a>
                    </button>
                </section>
            </section>
        </header>

        <footer class="chat">
            <img src="img/entrar.svg" alt="">
            <input id="message-input" type="text" placeholder="Digite sua mensagem...">
            <img id="send-icon" src="img/enviar.svg" alt="">
            <!--div onde vai aparecer as mensagens-->
            <div id="chat-messages"></div>
        </footer>

        <script>
            var cpwellingtonMessages = [];
            var gatesMessages = [];
            var monicaMessages = [];
            var cebolinhaMessages = [];
            var billMessages = [];
            var jobsMessages = [];

            // mostrar mensagens de um usuário
            function displayMessages(userMessages) {
                var chatMessages = document.getElementById("chat-messages");
                chatMessages.innerHTML = "";

                userMessages.forEach(function (message) {
                    var messageElement = document.createElement("p");
                    messageElement.textContent = message;
                    chatMessages.appendChild(messageElement);
                });
            }

            // mandar uma nova mensagem
            function sendMessage(user, message) {
                switch (user) {
                    case "cpwellington":
                        cpwellingtonMessages.push(message);
                        displayMessages(cpwellingtonMessages);
                        break;
                    case "gates":
                        gatesMessages.push(message);
                        displayMessages(gatesMessages);
                        break;
                    case "monica":
                        monicaMessages.push(message);
                        displayMessages(monicaMessages);
                        break;
                    case "cebolinha":
                        cebolinhaMessages.push(message);
                        displayMessages(cebolinhaMessages);
                        break;
                    case "bill":
                        billMessages.push(message);
                        displayMessages(billMessages);
                        break;
                    case "jobs":
                        jobsMessages.push(message);
                        displayMessages(jobsMessages);
                        break;
                    default:
                        console.log("Unknown chat user.");
                }
            }

            // Event listener para o send icon
            var sendIcon = document.getElementById("send-icon");
            sendIcon.addEventListener("click", function () {
                var userInput = document.getElementById("message-input").value;
                if (userInput) {
                    sendMessage("cpwellington", userInput);
                    document.getElementById("message-input").value = "";
                }
            });
        </script>
    </main>
    <script src="index.js"></script>
</body>

</html>