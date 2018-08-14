<?php
/**
 * Template Name: equipe
 */
get_header(); ?>

<section class="section custom-banner-cinzaEscuro padding-vertical-xlarge custom-banner-azul ">
	<div class="row align-middle space-vertical custom-blog phone-align-center">
		<div class="col align-left custom-equipe2">
			
			<h1> Equipe </h1>			
		</div>
	</div>
</section>

<?php include('contatoS.php') ?>

<section class="section custom-banner-branco custom-equipe-medica">
	<div class="row">
		<div class="col align-center">
			<h1>Equipe Médica.</h1>
		</div>
	</div>
</section>

<section class="section padding-vertical-small custom-equipe-medica space-vertical">
	<div class="row">
		<div class="col space-vertical">
			<div class="">
				<h1> Dr Formiga </h1>
			</div>
			<img class="imagem" src="<?php echo get_template_directory_uri();?>/assets/imgdr.png">
			<dvi class="">
				<p>
					Médico formado na PUC-PR, com especialização em oftalmologia pela Santa Casa de Misericórdia de Curitiba, título de especialista conferido pela Associação Médica Brasileira juntamente com o Conselho Brasileiro de Oftalmologia atua no atendimento da oftalmologia geral, glaucoma, catarata, pterígio, adaptação de lentes de contato, adaptação de próteses oculares, plástica facial ocular (oculoplástica), aplicação de botox, e cirurgia de estrabismo, trauma ocular.<br>
					Fluente em ingles e espanhol. 
				</p>
			</dvi>
		</div>
	</div>
</section>


<?php get_footer(); ?> 

