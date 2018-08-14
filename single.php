<?php get_header(); ?>
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=588662397886785";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class="section custom-banner-cinzaEscuro padding-vertical-xlarge custom-banner-azul">
	<div class="row align-middle space-vertical custom-blog">
		<div class="col align-left custom-equipe2">
			
			<h1> Conteúdos </h1>			
		</div>
	</div>
</section>
<?php include('contatoS.php') ?>

<section class="section phone-space-vertical custom-banner-cinza">
	<div class="row padding-vertical-xlarge">
		<div class="col span-2-3 custom-banner-branco  phone-align-center">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    <?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

			<div class="custom-imagem-blog align-center" style="background-image:url('<?php echo get_field("imagem") ?>');">
			</div>
			
			<div class="row custom-tamanho-conteudo">
				<div class="col span-1-1 space-vertical custom-tamanho-texto custom-conteudos">
					
					<h2> <?php the_time('d'); ?> / <?php the_time('M'); ?>	 </h2> 
					
					<div class="space-vertical">

						<h1><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h1> <!-- TITULO AQUI-->
						<div class="fb-share-button" style="margin-bottom:10px;" data-href="<?php echo get_permalink( $post->ID );?>" data-type="button_count"></div>
					</div>
					<div class="custom-dados">

						<?php the_content(); ?> 
					</div>
					<div class="custom-comentario">
						
						<h1 class="title-secundary">Deixe seu comentário</h1>
	        			<div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
	        		</div>	
					
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
	
    </div>	

</section>

<?php get_footer(); ?> 

