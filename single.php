<?php get_header(); ?>

	<div class="container">
		
		<?php if(have_posts()): while(have_posts()): the_post();
				blog_save_post_views(get_the_ID());  ?>
			<div class="post-conteudo-header grid-12">
				<div>
					<?php the_category(); ?>
				</div>
				<h3 class=titulo-post><?php the_title(); ?></h3>
				<div class="meta-autor">
					Por <span class="autor-post"><?php the_author(); ?></span> | <span class="data-post"><?php the_date(); ?></span>
				</div>
			</div>

			 
		<div class="grid-8">
				<article class="post">

					<div class="post-conteudo">
						<?php 
							the_content();
						?>
					</div>

					<div class="post-footer">
						<div class="social-share">
							<h3>Compartilhe com seus amigos =)</h3>
							<ul>
								<li>
									<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
								</li>
								<li>
									<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hey! Leia este post incrível: <?php the_title(); ?>&url=<?php the_permalink(); ?>&via=matosleo" data-size="large" > 
									Tweet
									</a>
								</li>
							</ul>
						</div>
						
						<div class="post-footer-tag">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tag_icon.png">
							<?php 
								echo get_the_tag_list('<div class="tags">', ' ', '</div>');
							?>
						</div>
					</div>

					<section class="comment-section">
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
					</section>

				</article>

			<?php endwhile; endif; ?>
			
		</div>

		<?php get_sidebar(); ?>
		
	</div>
<?php get_footer(); ?>