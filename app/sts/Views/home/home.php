<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

//echo "View Home <br>";
//var_dump($this->Dados['sts_carousels']);
//die;
?>

<main role="main">
    <?php if (is_array($this->Dados['sts_carousels'])) : ?>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                $cont_marc = 0;
                foreach ($this->Dados['sts_carousels'] as $carousel) {

                    echo "<li data-target='#myCarousel' data-slide-to='0'></li>";
                    $cont_marc++;
                }
                ?>
            </ol>

            <div class="carousel-inner">
                <?php
                $cont_slide = 0;
                foreach ($this->Dados['sts_carousels'] as $carousel) {
                    extract($carousel);


                ?>

                    <div class="carousel-item <?php if ($cont_slide == 0) {
                                                    echo 'active';
                                                } ?>">
                        <img class="first-slide img-fluid" src="<?php echo URL . 'assets/imagensofic/carousel/' . $id . '/' . $imagem; ?>" alt="<?= $titulo; ?>">
                        <div class="container">
                            <div class="carousel-caption <?= $posicao_text; ?>">
                                <h1 class="d-none d-md-block"><?= $titulo; ?></h1>
                                <p class="d-none d-md-block"><?= $descricao; ?></p>
                                <p class="d-none d-md-block"><a class="btn btn-lg btn-<?= $cor; ?>" href="<?= $link; ?>" role="button"><?= $titulo_botao; ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php
                    $cont_slide++;
                }
                ?>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <?php endif; ?>

    <div class="jumbotron servicos">
        <div class="container">
            <h2 class="display-4 text-center" style="margin-bottom: 40px;">Serviços</h2>
            <div class="card-deck">
                <div class="card text-center card-um">
                    <div class="icon-row tamanh-icone">
                        <span class="step size-96 text-danger">
                            <i class="icon ion-ios-camera-outline"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Serviço um</h5>
                        <p class="card-text lead">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card text-center card-dois">
                    <div class="icon-row tamanh-icone">
                        <span class="step size-96 text-danger">
                            <i class="icon ion-ios-film-outline"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Serviços dois</h5>
                        <p class="card-text lead">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card text-center card-tres">
                    <div class="icon-row tamanh-icone ">
                        <span class="step size-96 text-danger">
                            <i class="icon ion-ios-videocam-outline"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Serviço tres</h5>
                        <p class="card-text lead">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron video">
        <div class="container">
            <h2 class="display-4 text-center video-titulo" style="margin-bottom: 40px;">Vídeo</h2>
            <p class="lead text-center video-parag">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <div class="row justify-content-md-center video-cont">

                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SUlk2rMkKyc?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron blog-home">
        <div class="container">
            <h2 class="display-4 text-center" style="margin-bottom: 40px;">Últimos Artigos</h2>
            <div class="card-deck blog-text">
                <div class="card art-um">
                    <a href="artigo.html">
                        <img class="card-img-top" src="imagens/imagem_um.jpg" alt="Titulo do artigo">
                    </a>
                    <div class="card-body">
                        <a href="artigo.html">
                            <h5 class="card-title text-center text-danger">Card title</h5>
                        </a>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="text-center"><a href="#" class="btn btn-danger">Mais Detalhes</a></p>
                    </div>
                </div>
                <div class="card art-dois">
                    <a href="artigo.html">
                        <img class="card-img-top" src="imagens/imagem_dois.jpg" alt="Titulo do artigo">
                    </a>
                    <div class="card-body">
                        <a href="artigo.html">
                            <h5 class="card-title text-center text-danger">Card title</h5>
                        </a>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="text-center"><a href="#" class="btn btn-danger">Mais Detalhes</a></p>
                    </div>
                </div>
                <div class="card art-tres">
                    <a href="artigo.html">
                        <img class="card-img-top" src="imagens/imagem_tres.jpg" alt="Titulo do artigo">
                    </a>
                    <div class="card-body">
                        <a href="artigo.html">
                            <h5 class="card-title text-center text-danger">Card title</h5>
                        </a>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="text-center"><a href="#" class="btn btn-danger">Mais Detalhes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</main>
<?php
//var_dump($cont_slide);