<!DOCTYPE html>
<html lang="pt-BR">
<!--TRABALHO FEITO APENAS POR MIM ROMINHA DO ROMIRUS-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CefetMUSIC - Explorar</title>
</head>

<body>
    <aside class="menu-lateral">
        <header class="menu-lateral-header">
            <a href="Explorar.html">
                <div class="logo"><img src="img/logo.svg" alt="logo">
                    <span>Cefet<span id="blue">MUSIC</span></span>
                </div>
            </a>
        </header>

        <nav class="nav">
            <a href="Explorar.html">
                <button>
                    <span>
                        <img src="img/explorar.svg">
                        <span>Explorar</span>
                    </span>
                </button>
            </a>
            <a href="Musicas.html">
                <button>
                    <span>
                        <img src="img/music-note.svg">
                        <span>Músicas</span>
                    </span>
                </button>
            </a>
            <a href="Comunidades.html">
                <button>
                    <span>
                        <img src="img/people.svg">
                        <span>Comunidades</span>
                    </span>
                </button>
            </a>
            <a href="Chats.html">
                <button>
                    <span>
                        <img src="img/chat.svg">
                        <span>Chats</span>
                    </span>
                </button>
            </a>
            <a href="Favoritos.html">
                <button>
                    <span>
                        <img src="img/coracao.svg">
                        <span>Favoritos</span>
                    </span>
                </button>
            </a>
            <a href="CriarPlaylist.html">
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
                <span>Sair</span>
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

        <a href="Explorar.html">
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
                <span class="mobile-text">Sair</span>
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
                        <a href="Cadastro.html">
                            <span>Cadastrar</span>
                        </a>
                    </button>
                    <button>
                        <a href="Login.php">
                            <span>Entrar</span>
                        </a>
                    </button>
                </section>
            </section>
        </header>

        <span class="titulo-paginas">Explorar</span>
        <section class="banner">
            <img src="img/travis.jpg" alt="musicBoy">
            <div class="slogan"><span>Conecte-se com a <span id="blue">MÚSICA</span></span></div>
        </section>

        <hr class="divisao">

        <section class="mais-ouvidas-amigos">
            <div class="tudo-mais-ouvidas">
                <div class="up-mais-ouvidas">
                    <h1 id="titulo-secao">Mais ouvidas por amigos:</h1>
                    <div class="ver-mais">
                        <span>Ver Mais</span>
                        <img src="img/Arrow 1.png" alt="">
                    </div>
                </div>
                <div class="down-mais-ouvidas">

                    <div class="perfil">
                        <div class="nome"><img src="img/jobs.png"><span>Steve</span><span id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/tom-jobim.jpg" alt=""></div><span>Wave<br>Tom Jobin</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/monica.jpg"><span>Mônica</span><span id="blue">Seguir</span>
                        </div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/baile-favela.png" alt=""></div><span>Baile de Favela<br>MC João</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/bill.jpg"><span>Bill</span><span id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/hope.png" alt=""></div><span>Hope<br>XXX Tentation</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/cebolinha.jpg"><span>Cebolinha</span><span
                                id="blue">Seguir</span>
                        </div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/mc-vn.png" alt=""></div><span>Tú Conhece a Paola<br>MC VN do B13</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="divisao">

        <section class="top-dez">
            <h1 id="titulo-secao">Top 10 comunidades CEFET-MG:</h1>
            <div class="top-10-blocos">
                <section class="top1-top5">
                    <div class="blocos-top"><span>0<span id="blue">1</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">2</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">3</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">4</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">5</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                </section>
                <section class="top6-top10">
                    <div class="blocos-top"><span>0<span id="blue">6</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">7</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">8</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">9</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span id="blue">1<span>0</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                </section>
            </div>
        </section>

        <hr class="divisao">
        
        <section class="mais-ouvidas-amigos">
            <div class="tudo-mais-ouvidas">
                <div class="up-mais-ouvidas">
                    <h1 id="titulo-secao">Conheça os gostos das pessoas:</h1>
                    <div class="ver-mais">
                        <span>Ver Mais</span>
                        <img src="img/Arrow 1.png" alt="">
                    </div>
                </div>
                <div class="down-mais-ouvidas">

                    <div class="perfil">
                        <div class="nome"><img src="img/CPwellington.png"><span>Cpwel</span><span id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/america-psyco.png" alt=""></div><span>★<br>King</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>69</span></button>
                            <button><img src="img/coment.svg" alt=""><span>69</span></button>
                            <button><img src="img/share.svg" alt=""><span>69</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/iago.png"><span>Iago Calanga</span><span id="blue">Seguir</span>
                        </div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/sorry.png" alt=""></div><span>Sorry<br>Justin Bieber</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/giberto.png"><span>Giberto Grilo</span><span id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/eu-quero-tchu.png" alt=""></div><span>Eu quero tchu, eu quero tcha<br>João Lucas & Marcelo</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/zyzz-musculation.jpg"><span>Fábio Metalurgia</span><span
                                id="blue">Seguir</span>
                        </div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/monica.jpg" alt=""></div><span>Tú Conhece a Paola 2.0<br>MC VN do B13</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="divisao">

        <section class="top-dez">
            <h1 id="titulo-secao">Top 10 comunidades CEFET-MG:</h1>
            <div class="top-10-blocos">
                <section class="top1-top5">
                    <div class="blocos-top"><span>0<span id="blue">1</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">2</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">3</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">4</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">5</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                </section>
                <section class="top6-top10">
                    <div class="blocos-top"><span>0<span id="blue">6</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">7</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">8</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span>0<span id="blue">9</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                    <div class="blocos-top"><span id="blue">1<span>0</span></span>
                        <div class="comunidade-top"></div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <script src="index.js"></script>
</body>

</html>