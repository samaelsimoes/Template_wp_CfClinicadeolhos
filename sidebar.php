<section class="section">
	<aside id="sidebar" role="complementary">
		<div class="row custom-banner-branco ">
			<div class="col space-vertical custom-tamanho-conteudo custom-tamanho2-categoria padding-vertical-small">
					
				<div class="space-vertical  align-left">
					<?php if (is_active_sidebar('primary-widget-area')) : ?> <!-- Categoria --> 
					<?php dynamic_sidebar('primary-widget-area');?>
				</div>
			</div>
		</div>
			
		<footer class="section footer"></footer>
			
		<?php endif; ?>
	</aside>
</section>