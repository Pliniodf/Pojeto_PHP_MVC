<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

//echo "View Home <br>";
//var_dump($this->Dados['sts_carousels']);
?>

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
            
        </ol>
    </div>
    <div class="carousel-inner">
        <?php
            foreach($this->Dados['sts_carousels'] as $carousel){
                extract($carousel);
                echo $id;
            }
        ?>
        <div class="carousel-item active">
            <img class="first-slide img-fluid" src="<?php echo URL . '/assets/imagensofic/carousel/' . $id . '/' . $imagem; ?>" alt="Primeiro conteúdo">
        </div>

    </div>
</main>