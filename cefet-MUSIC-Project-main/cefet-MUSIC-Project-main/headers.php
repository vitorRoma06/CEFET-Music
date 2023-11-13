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

<!--Criando menu mobile-->
<button class="button-mobile" onclick="toggleMenu()">
    <img src="img/menu.svg" alt="">
    <span>Menu</span>
    <span></span>
</button>

<nav class="menu-mobile" id="menu-mobile">
    <button onclick="toggleMenu()">
        <span>
            <img src="img/close.svg">
        </span>
    </button>

    <a href="Explorar.php">
        <button>
            <span>
                <img src="img/explorar.svg">
                <span class="mobile-text">Explorar</span>
            </span>
        </button>
    </a>
    <a href="Musicas.html">
        <button>
            <span>
                <img src="img/music-note.svg">
                <span class="mobile-text">Músicas</span>
            </span>
        </button>
    </a>
    <a href="Comunidades.html">
        <button>
            <span>
                <img src="img/people.svg">
                <span class="mobile-text">Comunidades</span>
            </span>
        </button>
    </a>
    <a href="Chats.html">
        <button>
            <span>
                <img src="img/chat.svg">
                <span class="mobile-text">Chats</span>
            </span>
        </button>
    </a>
    <a href="Favoritos.html">
        <button>
            <span>
                <img src="img/coracao.svg">
                <span class="mobile-text">Favoritos</span>
            </span>
        </button>
    </a>
    <button>
        <span>
            <img src="img/sair.svg">
            <span class="mobile-text"><a href="logout.php">Sair</a></span>
        </span>
    </button>
</nav>



<main class="principal">
    <header class="cabecalho">
        <div class="buscar">
            <input type="search" placeholder="Buscar comunidades, músicas, álbuns...">
            <img src="img/lupa.svg" alt="">
        </div>
        <section class="right-header">
            <section class="assist">
                <button>
                    <img src="img/contraste.svg">
                </button>
                <form method="POST" action="libras.php">
                    <button type="submit" name="libras">
                        <img src="img/libras.svg">
                    </button>
                </form>

                <button>
                    <img src="img/fonte.svg">
                </button>
            </section>
            <section class="cadastro">
                <button>
                    <a href="Cadastro.php">
                        <span>Cadastrar</span>
                    </a>
                </button>
                <button>
                    <a href="login.php">
                        <span>Entrar</span>
                    </a>
                </button>
                <?php if (!isset($_SESSION)) {
                    echo "";
                } else {
                    echo "<p>Olá " . $_SESSION['nome'] . "</p>";
                }
                ?>
            </section>
        </section>
    </header>