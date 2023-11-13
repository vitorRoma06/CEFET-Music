<?php

include("protect.php");

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>CefetMUSIC - Explorar</title>
</head>

<body>
    <?php include("headers.php"); ?>
    <main>
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
                            <div class="square-play-music"><img src="img/tom-jobim.jpg" alt=""></div><span>Wave<br>Tom
                                Jobin</span>
                            <script>
                                var fotoWave = document.querySelector(".perfil:nth-child(1) .square-play-music img");
                                var urlMusicaWave = "music/Wave.mp3";
                                var audioWave = new Audio(urlMusicaWave);
                                fotoWave.addEventListener("mouseover", function () {
                                    audioWave.play();
                                });
                                fotoWave.addEventListener("mouseout", function () {
                                    audioWave.pause();
                                    audioWave.currentTime = 0;
                                });
                            </script>
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
                            <div class="square-play-music"><img src="img/baile-favela.png" alt=""></div><span>Baile de
                                Favela<br>MC João</span>
                            <script>
                                var fotoBaileFavela = document.querySelector(".perfil:nth-child(2) .square-play-music img");
                                var urlMusicaBaileFavela = "music/BdeFavela.mp3";
                                var audioBaileFavela = new Audio(urlMusicaBaileFavela);
                                fotoBaileFavela.addEventListener("mouseover", function () {
                                    audioBaileFavela.play();
                                });
                                fotoBaileFavela.addEventListener("mouseout", function () {
                                    audioBaileFavela.pause();
                                    audioBaileFavela.currentTime = 0;
                                });
                            </script>
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
                            <div class="square-play-music"><img src="img/hope.png" alt=""></div><span>Hope<br>XXX
                                Tentation</span>
                        </div>
                        <script>
                            var fotoXXX = document.querySelector(".perfil:nth-child(3) .square-play-music img");
                            var urlMusicaXXX = "music/hope.mp3";
                            var audioXXX = new Audio(urlMusicaXXX);
                            fotoXXX.addEventListener("mouseover", function () {
                                audioXXX.play();
                            });
                            fotoXXX.addEventListener("mouseout", function () {
                                audioXXX.pause();
                                audioXXX.currentTime = 0;
                            });
                        </script>
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
                            <div class="square-play-music"><img src="img/mc-vn.png" alt=""></div><span>Tú Conhece a
                                Paola<br>MC VN do B13</span>
                            <script>
                                var fotoMCVn = document.querySelector(".perfil:nth-child(4) .square-play-music img");
                                var urlMusicaMCVn = "music/ubstep_funk.mp3";
                                var audioMCVn = new Audio(urlMusicaMCVn);
                                fotoMCVn.addEventListener("mouseover", function () {
                                    audioMCVn.play();
                                });
                                fotoMCVn.addEventListener("mouseout", function () {
                                    audioMCVn.pause();
                                    audioMCVn.currentTime = 0;
                                });
                            </script>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
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
                        <div class="nome"><img src="img/CPwellington.png"><span>Cpwel</span><span
                                id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/america-psyco.png" alt=""></div>
                            <span>★<br>King</span>
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
                            <div class="square-play-music"><img src="img/sorry.png" alt=""></div><span>Sorry<br>Justin
                                Bieber</span>
                        </div>
                        <div class="interacoes-mais-ouvidas">
                            <button><img src="img/coracao2.svg" alt=""><span>12</span></button>
                            <button><img src="img/coment.svg" alt=""><span>12</span></button>
                            <button><img src="img/share.svg" alt=""><span>12</span></button>
                        </div>
                    </div>
                    <div class="perfil">
                        <div class="nome"><img src="img/giberto.png"><span>Giberto Grilo</span><span
                                id="blue">Seguir</span></div>
                        <div class="play-music">
                            <div class="square-play-music"><img src="img/eu-quero-tchu.png" alt=""></div><span>Eu quero
                                tchu, eu quero tcha<br>João Lucas & Marcelo</span>
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
                            <div class="square-play-music"><img src="img/monica.jpg" alt=""></div><span>Tú Conhece a
                                Paola 2.0<br>MC VN do B13</span>
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