<?php

// include("protect.php");

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
    <title>CefetMUSIC - Comunidades</title>
</head>

<body>
    <?php include("headers.php"); ?>

    <span class="titulo-paginas">Comunidades</span>
    <section class="comunidades-principal">
        <section>
            <section class="secao">
                <div class="up-comunidades">
                    <h1 id="titulo-secao">Recomendados:</h1>
                    <div class="ver-mais">
                        <span>Ver Mais</span>
                        <img src="img/Arrow 1.png" alt="">
                    </div>
                </div>
                <div class="down-comunidades">

                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">FUNK BH</span>
                            <img src="img/funk.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">HARD STYLE</span>
                            <img src="img/zyzz-musculation.jpg" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">SERTANEJO</span>
                            <img src="img/sertanejo.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">MPB</span>
                            <img src="img/MPB.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="divisao">

            <section class="secao">
                <div class="up-comunidades">
                    <h1 id="titulo-secao">Seus amigos frequentam:</h1>
                    <div class="ver-mais">
                        <span>Ver Mais</span>
                        <img src="img/Arrow 1.png" alt="">
                    </div>
                </div>
                <div class="down-comunidades">

                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">ROCK</span>
                            <img src="img/rock.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">POP</span>
                            <img src="img/POP.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">BREGA FUNK</span>
                            <img src="img/BREGA-FUNK.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">TRAP</span>
                            <img src="img/trap.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="divisao">

            <section class="secao">
                <div class="up-comunidades">
                    <h1 id="titulo-secao">Comunidades mais frequentadas:</h1>
                    <div class="ver-mais">
                        <span>Ver Mais</span>
                        <img src="img/Arrow 1.png" alt="">
                    </div>
                </div>
                <div class="down-comunidades">

                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">FUNK BH</span>
                            <img src="img/funk.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">TRAP</span>
                            <img src="img/trap.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">HARDSTYLE</span>
                            <img src="img/zyzz-musculation.jpg" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="comunidade-div">
                        <div>
                            <span class="titulo-comunidade">MPB</span>
                            <img src="img/MPB.png" alt="">
                            <button>
                                <span>
                                    <img src="img/entrar.svg">
                                    <span>Entrar</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>

    </main>
    <script src="index.js"></script>
</body>

</html>