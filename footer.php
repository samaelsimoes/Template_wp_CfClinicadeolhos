<?php
wp_footer();
include 'googleMaps/mapaphp.php';
?>

<section class="section padding-vertical-xlarge custom-footer" id="contato">
	<div class="row">
		<div class="col span-3-6 space-vertical">
			<div class="custom-foorte2 align-left">

				<div class="row align-middle">
					<div class="col span-1-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo2.svg">
					</div>
					<div class="col span-5-6">
						<p>Dr Daniel Formiga</p>
					</div>
				</div>
			</div>
			<div class="">
				<p>whatsapp: <a>(47) 98823-5552 </a></p>
				<p>Fone: <a>(47) 3017-4040 </a></p>
				<p>Fone: <a>(47) 3433-4019 </a></p>
				<p>Fone: <a>(47) 3031-7107 </a></p>
				<p>Banco de olhos: <a>(47) 3433-4854 </a></p>
				<br>
				<p>Rua: Abdon Batista, 47</p>
				<p>Sala 902 Edifício Clinica São Marcos - Centro,</p>
				<p>CEP  89201-010 - Joinville/SC - Brasil </p>
				<br>
				<p> <a> cfclinicadeolhos@gmail.com </a></p>
			</div>
		</div>
		<div class="col span-2-6 custom-foorte2 padding-vertical-small">
			<?php wp_nav_menu(array('theme_location' => 'main-footer'));?>
		</div>
		<div class="col span-1-6 ">
			<div class="row phone-row phone-align-center space-vertical">
				<div class="col phone-col span-1-3">
					<a href="https://www.facebook.com/clinicaformiga/">
						<img class="custom-imagem-footer" src="<?php echo get_template_directory_uri(); ?>/assets/facebook.svg">
					</a>					
				</div>
				<div class="col phone-col span-1-3">
					<a href="https://www.instagram.com/clinicaformiga">
						<img class="custom-imagem-footer" src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg">
					</a>
				</div>
				<div class="col phone-col span-1-3">
					<!-- <a href="">
						<img class="custom-imagem-footer" src="<?php echo get_template_directory_uri(); ?>/assets/youtube.svg">
					</a> -->
				</div> 
			</div>
		</div>
	</div>
</section>
<section class="section padding-vertical-small">
	<div class="row">
		<div class="col phone-align-center align-center">
			<a href="#">
            	<p class="copyright text-muted">Copyright &copy; Todos direitos reservados 2017</p>
            </a>
        </div>
		<div class="col">
			<div class="row">
				<a href="https://samaelsimoes.github.io" class="copyright text-muted" style="white-space: nowrap;text-decoration: none;color: #575757;"> Desenvolvido por: Kether technology</a>
			</div>
		</div>
    </div>
</section>

</body>
</html>