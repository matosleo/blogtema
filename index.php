<?php get_header(); ?>

	<div class="container">
		<div class="grid-8">
			<h2 class="titulo-categoria">Ultimas postagens</h2>

			<?php if(have_posts()): while(have_posts()): the_post(); ?> 

				<article class="post">
					<div class="post-header">
						<div>
							<?php the_category(); ?>
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><span class="autor-post"><?php the_author(); ?></span><br><?php the_date(); ?></p>
					</div>
					<div class="post-img">
						<!-- img width: 696 -->
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>"/>
							</a>
						<?php endif; ?>
					</div>
					<div class="post-resumo">
						<p><?php the_excerpt(); ?></p>
						<a class="call-to-action" href="<?php the_permalink(); ?>">Leia mais</a>
					</div>

					<div class="post-footer">
						<div class="post-footer-tag">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tag_icon.png">
							<?php 
								echo get_the_tag_list('<div class="tags">', ' ', '</div>');
							?>
						</div>

						<div class="post-footer-comments">
							<span class="fb-comments-count" data-href="<?php the_permalink(); ?>"></span>
							comentários
						</div>
					</div>

				</article>

			<?php endwhile; endif; ?>

			<?php $template_uri_directory = get_template_directory_uri(); ?>

			<div class="grid-6 navegacao-right">
				<?php 
					if( get_previous_posts_link() ) :
						echo '<img src="' . $template_uri_directory . '/assets/images/icons/nav-icon-left.png">';
						previous_posts_link('Posts Novos');
					endif; 
				?>
			</div>

			<div class="grid-6 navegacao-left">
				<?php 
					if( get_next_posts_link() ) :
						next_posts_link('Posts Antigos');
						echo '<img src="' . $template_uri_directory . '/assets/images/icons/nav-icon-right.png">';
					endif; 
				?>
			</div>
			
		</div>

		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>
	

