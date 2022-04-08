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
    <?php if(is_array($this->Dados['sts_carousels'])) : ?>
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
                            <p class="d-none d-md-block"><a class="btn btn-lg btn-danger" href="<?= $link; ?>" role="button"><?= $titulo_botao; ?></a></p>
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
</main>
<?php
//var_dump($cont_slide);