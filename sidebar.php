<?php 

if(! is_active_sidebar('sidebar-1'))
{
	return;
}

?>
	<aside class="grid-4">

		<section class="categoria">
			<h2 class="titulo-categoria">Autor</h2>
			<div class="autor-img">
				<a href="/contato/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/minha_foto.jpg" alt="A foto de Leonardo Matos sorrindo, autor do blog Leitor Hipster"></a>
			</div>
			<div class="autor-descricao">
				<h3>Leonardo Matos</h3>
				<p>Olá visitante! Apaixonado por café, livros e indie rock. Meu objetivo com o Leitor Hipster é publicar minhas resenhas, notícias e experiências no mundo da leitura. Aproveitem =)</p>
			</div>
		</section>

		<section class="categoria">
			<h2 class="titulo-categoria">Redes Sociais</h2>
			<div class="nav-social">
				<ul>
					<li>
						<a href="https://www.facebook.com/leitorhipster/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb_icon_trans.png">
							<span>Facebook</span>
						</a>
					</li>
					<li>
						<a href="instagram.com/leitorhipster">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta_icon_trans.png">
							<span>Instagram</span>
						</a>
					</li>
					<li>
						<a href="twitter.com/leitorhipster">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter_icon_trans.png">
							<span>Twitter</span>
						</a>
					</li>
				</ul>
			</div>
		</section>

		<?php dynamic_sidebar('sidebar-1'); ?>

	</aside>

