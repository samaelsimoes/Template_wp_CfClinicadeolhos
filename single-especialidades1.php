<?php get_header(); ?>

<div id="fb-root"></div>
<script>
	(function(d, s, id) {

		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=588662397886785";
		fjs.parentNode.insertBefore(js, fjs);
	}
	(document, 'script', 'facebook-jssdk'));
</script>

<section class="section custom-banner-azul padding-vertical-xlarge">
	<div class="row align-middle space-vertical">
		<div class="col align-left custom-equipe2">
			
			<h1>Duvidas Frequentes</h1>			
		</div>
	</div>
</section>
<?php include('contatoS.php') ?>
<section class="section padding-vertical-large">
	<div class="row space-vertical">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
		<div class="col span-1-2">
			<div class="item-photo2" style="background-image:url('<?php echo get_field("imagem2") ?>');">
								
				<div class="item-photo-hover"></div>
			</div>
		</div>
		<div class="col span-1-2 space-vertical custom-letra-especialidades">
			<div class="">
				
				 <h1><?php the_title(); ?></h1><!-- TITULO AQUI-->
			</div>
			
			<div class="space-vertical">

				<?php the_content(); ?> 
			</div>
			<div class="custom-conteudos align-center">
				<h3><a href="<?php echo site_url();?>/duvidas/ ">saiba mais</a></h3>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
</section>
<?php get_footer(); ?> 

