<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

//echo "View HOME <br>";
//var_dump($this->Dados['sts_carousels']);
?>

<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
        <?php
        $marcador = 0;
         foreach($this->Dados['sts_carousels'] as $carousel):
        
      
        echo "<li data-target='#myCarousel' data-slide-to='$marcador' class='active'></li>";
            $marcador++;
      
         endforeach;
        
        ?>
        </ol>
    <div class="carousel-inner">
        <?php
            $cont_slid = 0;
            foreach($this->Dados['sts_carousels'] as $carousel):
            extract($carousel);
                    
        ?>
        <div class="carousel-item <?php if($cont_slid ==0) {echo 'active';}?>">
        <img class="second-slide img-fluid" src="<?php echo URL .'/assets/imagens/carousel/'.$id.'/'.$imagem;?>" alt="<?php echo $titulo;?>">
        <div class="container">
			<div class="carousel-caption <?php echo $posicao_text;?>">
				<h1 class="d-none d-md-block"><?php echo $titulo;?></h1>
					<p class="d-none d-md-block"><?php echo $descricao;?></p>
						<p class="d-none d-md-block"><a class="<?php echo 'btn btn-lg btn-'.$cor;?>" href="<?php echo $link;?>" role="button"><?php echo $titulo_botao;?></a></p>
			</div>
		</div>
    </div>
        <?php
         $cont_slid ++;
            endforeach;

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
                <?php extract( $this->Dados['sts_servicos'] [0]);?>

                <div class="jumbotron servicos">
				<div class="container">
					<h2 class="display-4 text-center" style="margin-bottom: 40px;"><?php echo $titulo;?></h2>
					<div class="card-deck">
						<div class="card text-center card-um">
							<div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
									<i class="icon <?php echo $icone_um;?>"></i>
								</span>
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $nome_um;?></h5>
								<p class="card-text lead"><?php echo $descricao_um;?></p>      
							</div>
						</div>
						<div class="card text-center card-dois">
							<div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
									<i class="icon <?php echo $icone_dois;?>"></i>
								</span>
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $nome_dois;?></h5>
								<p class="card-text lead"><?php echo $descricao_dois;?></p>
							</div>
						</div>
						<div class="card text-center card-tres">
							<div class="icon-row tamanh-icone ">
								<span class="step size-96 text-danger">
									<i class="icon <?php echo $icone_tres;?>"></i>
								</span>
							</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $nome_tres;?></h5>
								<p class="card-text lead"><?php echo $descricao_tres;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			
			<?php extract( $this->Dados['sts_videos'] [0]);?>

			<div class="jumbotron video">
				<div class="container">
					<h2 class="display-4 text-center video-titulo" style="margin-bottom: 40px;"><?php echo $titulo;?></h2>
					<p class="lead text-center video-parag"><?php echo $descricao;?></p>
					<div class="row justify-content-md-center video-cont">
   
						<div class="col-12 col-md-8">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="<?php echo $video;?>" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			

			<div class="jumbotron blog-home">
				<div class="container">
					<h2 class="display-4 text-center" style="margin-bottom: 40px;">Ultimos artigos</h2>
					<div class="card-deck blog-text">
						<?php foreach ($this->Dados['sts_artigos'] as $artigo):
								extract($artigo);
						?>
						<div class="card art-um">
							<a href="artigo.html">
								<img class="card-img-top" src="<?php echo URL .'/assets/imagens/artigo/'.$id.'/'.$imagem;?>" alt="Titulo do artigo">
							</a>
							<div class="card-body">
								<a href="artigo.html">
									<h5 class="card-title text-center text-danger"><?php echo $titulo ;?></h5>
								</a>
								<p class="card-text"><?php echo $descricao ;?></p>
								<p class="text-center"><a href="#" class="btn btn-danger">Mais Detalhes</a></p>
							</div>
						</div>
						<?php
						endforeach;
						?>
					</div>
				</div>
			</div>	
			
            </div>
</main>

