
<?php get_header(); ?>

<?php include('efeito/efeito.php') ?>
<?php include('contatoS.php') ?>

<section class="section padding-vertical-xlarge custom-banner-cinza  custom-letra-especialidades" id="especialidades">
	<div class="row align-center space-vertical">
		<div class="col padding-vertical-small">
			<div class="space-vertical align-center custom-fonte">

				<div class="display-hide phone-display-hide"><h1> Clinica de olhos Dr Formiga </h1></div>
				<div class="display-hide phone-display-hide"><h1>Dr Daniel Formiga </h1></div>

				<h1> Especialidades</h1>
				<div class="align-center">
					<hr class="hr-short-especialidade"/>
				</div>
				<p>Nossa clínica conta com profissionais extremamente qualificados para melhor atendê-lo tanto no que se refere a oftalmologia geral  quanto na resolução de doenças oculares complexas altamente danosas a saúde ocular e da visão.</p>
			</div>
			<div class="row align-center">
				<?php
						global $paged;
						$curpage = $paged ? $paged : 1;
						$args = array (
					'post_type' => 'especialidades1', 
							'orderby' => 'post_date',
						   'order' => 'DSC', 
						   'posts_per_page' => '3', 
						   'paged' => $paged
						   );

						$query = new WP_Query($args);
						if ($query->have_posts()) :
						 while($query->have_posts()):
						  $query->the_post(); 
					?>		
				<div class="col span-1-3 phone-space-vertical space-vertical padding-vertical-small">
					<div class="">
						<a href="<?php the_permalink();?>"><div class="item-photo" style="background-image:url('<?php echo get_field("imagem") ?>');">
							<div class="item-photo-hover"></div>
						</div>
					</div>
					<div class="">
						<div class="space-vertical">
							 <p><?php the_title(); ?></p> </a> <!-- TITULO AQUI-->
						</div>	
					</div>	
				</div>		
				<?php
					endwhile;
					    wp_reset_postdata();
					endif;
				?> 	
			</div>
			<div class="row">
				<!-- TESTE -->		
				<?php

						$args = array ('post_type' => 'especialidades2', 
									   'order' => 'DSC', 
									   'posts_per_page' => '3', 
									   'paged' => $paged
									   );
						$query = new WP_Query( $args );

						if ( $query->have_posts() ) {

						    while ( $query->have_posts() ) {
						          	
						        $query->the_post(); { 
					           	$thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>		
				<div class="col span-1-3 phone-space-vertical space-vertical padding-vertical-small">
					<div class="">
						<a href="<?php the_permalink();?>"> <div class="item-photo" style="background-image:url('<?php echo get_field("imagem") ?>');">
							<div class="item-photo-hover"></div>
						</div>
					</div>
					<div class="">	
						<div class="space-vertical">

							<p><?php the_title(); ?></p> </a> <!-- TITULO AQUI-->
						</div>	
					</div>
				</div>		
				<?php 
							}
						} 
					} 
					wp_reset_postdata();
				?>						
			</div>
			<div class="row">
				<!-- TESTE -->		
				<?php

						$args = array ('post_type' => 'especialidades3', 
									   'order' => 'DSC', 
									   'posts_per_page' => '3', 
									   'paged' => $paged
									   );
						$query = new WP_Query( $args );

						if ( $query->have_posts() ) {

						    while ( $query->have_posts() ) {
						          	
						        $query->the_post(); { 
					           	$thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>		
				<div class="col span-1-3 phone-space-vertical space-vertical padding-vertical-small">
					<div class="">
						<a href="<?php the_permalink();?>"><div class="item-photo" style="background-image:url('<?php echo get_field("imagem") ?>');">
							<div class="item-photo-hover"></div>
						</div>
					</div>
					<div class="">
						<div class="space-vertical">

							 <p><?php the_title(); ?></p> </a> <!-- TITULO AQUI-->
						</div>	
					</div>	
				</div>		
				<?php 
							}
						} 
					} 
					wp_reset_postdata();
				?>						
			</div>
		</div>
	</div>
</section>
<section class="section padding-vertical-xlarge  custom-banner-branco custom-letra-efeito phone-align-center custom-banner-azul2" id="sobreaclinica">
	<div class="row">
		<div class="col space-vertical  " >
			<div class="space-vertical">
				<div class="align-center space-vertical">
					<h1>Sobre a clinica</h1>
					<div class="align-center">
						<hr class="hr-short"/>
					</div>
				</div>
			</div>	
			<div class="space-vertical">	

				<h2 class="align-left">Missão</h2>

				<p >Nossa missão é fazer da Oftalmologia, uma especialidade de acesso fácil a população através de preços justos e qualidade no atendimento.</p>
				
				<h2 class="align-left">Visão</h2>

				<p> Promover um atendimento de altíssimo nível e fazer assim um bem maior para a sociedade de Joinville e região.</p>

				<h2 class="align-left">Estrutura </h2>

				<p>A clínica, além de estar super bem localizada em um endereço de fácil acesso, no centro da cidade, conta com equipamentos de última geração com tecnologia de ponta atual, que trazem confiança e credibilidade aos pacientes. Conta também com uma sala de espera confortável, ambiente agradavel proporcionando o conforto para o paciente.</p>	
			</div>
			<div class="row ">
				<div class="col span-1-1 space-vertical">
					<div class="space-vertical align-center ">
						<a href="<?php echo site_url();?>/equipe-medica/ "><h1>Dr Daniel Formiga</h1></a>
						<div class="align-center">
							<hr class="hr-short-especialidade"/>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="custom-equipe" style="background-image:url('http://www.cfclinicadeolhos.com/wp-content/uploads/2018/08/DSC_0747.jpg');">
					</div>
				</div>
			</div>
			<!--<div class="space-vertical custom-saiba-mais">
				<a href="<?php echo site_url();?>/sobre-a-clinica/">saiba mais</a>
			</div>-->
		</div>
	</div>
</section>

<section class=" custom-img-exames">	
	<div class="custom-color-img-exames padding-vertical-small">
		<div class="row custom-text">
			<div class="col ">
				<div class="row ">
					<div class="col align-center padding-vertical-small">
						<h1> Exames </h1> <br>
					</div>
				</div>	
				<div class="col">
					<p> Biometria Ultrassônica </p>
					<p> Microscopia Especular de Córnea </p>
					<p> Potencial de Acuidade Macular </p>
					<p> Mapeamento de Retina </p>
					<p> Topografia de Córnea Computadorizado </p>
					<p> Adaptação de Lente de Contato </p>
					<p> Adaptação de Prótese Ocular </p>
					<p> Paquimetria</p>
					<p> Biomicroscopia de Fundo de Olho </p>
					<p> Tonometria pós carga </p>
					<p> Retinografia </p>
					<p> Papilografia </p>
					<p> Ultrassonografia Ocular </p>
					<p> Capsulotomia Yag Laser </p>
					<p> Iridectomia yag laser </p>
					<p> Gonioscopia</p>
					<p> Exoftalmometria </p>				
				</div>
			</div>	
			<div class="col">
				<div class="row">
					<div class="col align-center padding-vertical-small">
						<h1> Consultas Pediátricas </h1> <br>
					</div>
				</div>	
				<div class="row">
					<div class="col">
						<p> Cartões de Teller</p>
						<p> Titmus Test</p>
						<p> Motilidade Ocular</p>						
					</div>
				</div>		
			</div>	
			<div class="col">
				<div class="row">
					<div class="col align-center padding-vertical-small">
						<h1> Cirurgias </h1> <br>
					</div>
				</div>	
				<div class="row">
					<div class="col">
						<p> Cirurgia de catarata </p>
						<p> Cirurgia Pterígio </p>
						<p> Cirurgia de Ceratocone </p>
						<p> Cirurgia de Correção de Grau:</p>
							<p> - Miopia</p>
							<p> - Astigmatismo</p>
							<p> - Hipermetropia</p>
							<p> - Presbiopia </p>
						<p>Cirurgia de Glaucoma</p>
					</div>
				</div>		
			</div>	
		</div>
	</div>			
</section>	
<section class="padding-vertical-small">
	<div class="row align-center custom-text-img-clinica ">
		<div class="col padding-vertical-small">
			<h1> Imagens da Clínica </h1>
		</div>
	</div>		
	<div class="row">
		<div class="col">
			<?php echo do_shortcode('[responsive-slider id=235]'); ?>
		</div>
	</div>	
</section>
<section class="section padding-vertical-xlarge space-vertical custom-banner-branco phone-align-center" id="planosaude">
	<div class="row">
		<div class="col span-1-1 custom-text-convenios">
			<div class="space-vertical align-center custom-fonte custom-letra-convenios">
				<h1>Plano de Saúde e Convênios</h1>			
			</div>
			<div class="slickconvenio padding-vertical-small">

				<?php

					global $paged;
					$curpage = $paged ? $paged : 1;
					
					$args = array(

					    'post_type' => 'convenio',
					    'orderby' => 'post_date',
					    'order'   => 'DESC',
					    'posts_per_page' => 10,
					    'paged' => $paged,
					);

					$query = new WP_Query($args);
					if($query->have_posts()) : 
						while ($query->have_posts()) : 
							$query->the_post();
				?>

				<div class="row ">
					<div class="col align-center padding-vertical-small phone-align-center">

						<div class="custom-img-clinica" style="background-image:url('<?php echo get_field("imagem") ?>');">

							<div class="item-photo-hover"></div>
						</div>
					</div>
				</div>
				<?php
					endwhile;
					    wp_reset_postdata();
					endif;
				?> 
			</div>
		</div>
	</div>
	<script>
		$('.slickconvenio').slick({
		    dots: true,
		    infinite: false,
		    speed: 300,
		    slidesToShow: 3,
		    slidesToScroll: 3,
		    responsive: [

		    {
		      breakpoint: 1024,		    
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 748,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	</script>
</section>
<?php get_footer(); ?> 