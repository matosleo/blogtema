	<footer class="footer">
		<div class="container">
			<div class="grid-6">
				<div class="logo-footer">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_blog_branco.png"></a>
					<p>Leitor Hipster - Porque ler ainda é cool</p>
				</div>
			</div>

			<div class="grid-6">
				<div class="social-footer">
					<ul>
						<li>
							<a href="https://www.facebook.com/leitorhipster/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb_icon.png">
								<span>facebook.com/leitorhipster</span>
							</a>
						</li>
						<li>
							<a href="instagram.com">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta_icon.png">
								<span>@leitorhipster</span>
							</a>
						</li>
						<li>
							<a href="twitter.com">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter_icon.png">
								<span>twitter.com/leitorhipster</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="copy grid-12">Copyright © 2018 - Leitor • Hipster</p>
		</div>
	</footer>

  	<!-- Inicio Wordpress Footer -->
  	<?php wp_footer(); ?>
  	<!-- Fim Wordpress Footer -->

  	<!-- Load Twitter SDK for JavaScript -->
  	<script>window.twttr = (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0],
	    t = window.twttr || {};
	  if (d.getElementById(id)) return t;
	  js = d.createElement(s);
	  js.id = id;
	  js.src = "https://platform.twitter.com/widgets.js";
	  fjs.parentNode.insertBefore(js, fjs);

	  t._e = [];
	  t.ready = function(f) {
	    t._e.push(f);
	  };

	  return t;
	}(document, "script", "twitter-wjs"));</script>

	<!-- Load Facebook SDK for JavaScript -->
  	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=1798717213485966&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
