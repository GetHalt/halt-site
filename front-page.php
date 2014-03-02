<?php
/**
 * Site's front page.
 *
 * @package halt-site
 */

get_header(); ?>

	<section class="feature feature--main">
		<div class="inside">
			<h2 class="feature__title">A Great theme to start with.</h2>
			<p class="feature__description">What else could be better than a default theme to start your support portal with? It comes with a full support for <strong>Origin</strong>, a starter theme for Halt, so that you can start in no time.</p>

			<div class="feature__playground">
				<div class="feature__playground--header">
					<div class="inside">
						<h3>Halt</h3>
						<div class="navigation">
							<ul>
								<li>Home</li>
								<li>Tickets</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="inside search-section">
					<h2>Help &amp; Support</h2>
					<p>Need some help? Quickly search our knowledgebase articles.</p>

					<input type="search" placeholder="Type a keyword to search…" disabled>
				</div>
			</div>
		</div>
	</section>

	<section class="feature feature--basic">
		<div class="inside">
			<figure class="feature__image">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-1.jpg" alt="" width="180">
			</figure>
			<div class="feature__content">
				<h2 class="feature__title">The Lesser, the better.</h2>
				<p class="feature__description">Nothing fancy, still handy. With Halt, you can maintain a full fledged knowledebase articles section, so your users don’t have to search for the same thing again. If nothing helps, Tickets to the rescue.</p>
			</div>
		</div>
	</section>

	<section class="feature feature--subscribe">
		<div class="inside">
			<div class="feature__content">
				<div class="feature__content--inside">
					<p>Halt is currently in active development and will be revealed to the world soon.</p>

					<form class="subscription-form" method="post" action="<?php the_permalink(); ?>">
						<input type="text" name="subscription-name" placeholder="Your Name">
						<input type="email" name="subscription-email" placeholder="Your Email" required>

						<input type="submit" value="Subscribe" class="submit">
					</form>

					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="177px" height="182px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<g>
						<path d="M49.301,89.18c-1.44-0.015-2.882-0.109-4.31-0.285C24.097,86.354,8.963,67.73,10.177,46.708
							c0.163-2.835,0.318-6.99-3.695-7.479c-4.017-0.487-5.115,3.057-5.339,6.054c-1.98,26.219,16.767,49.615,42.762,52.781
							c1.923,0.234,3.867,0.35,5.808,0.354c3.135,0,7.184-0.357,6.936-4.926C56.395,88.859,52.391,89.213,49.301,89.18z"/>
						<path d="M75.271,54.923c3.514,0,4.658-3.003,4.526-5.86c-0.76-16.392-14.11-29.452-30.461-29.452
							c-16.44,0-29.843,13.201-30.471,29.719c-0.1,2.645,0.786,5.593,4.38,5.593c3.51,0,4.577-3.086,4.745-5.777
							c0.708-11.329,9.997-20.298,21.346-20.298c11.504,0,20.89,9.217,21.368,20.763C70.818,52.33,72.09,54.923,75.271,54.923z"/>
						<path d="M91.633,25.704C78.326,2.33,49.016-5.84,25.835,7.2c-2.259,1.273-3.784,4.057-2.254,6.742
							c1.724,3.029,4.602,2.478,6.908,1.203c18.81-10.413,42.486-3.748,53.258,15.176c10.772,18.923,4.63,43.048-13.665,54.363
							c-2.246,1.391-4.156,3.644-2.432,6.674c1.535,2.699,4.68,2.733,6.9,1.379C97.268,78.893,104.936,49.072,91.633,25.704z"/>
						<ellipse cx="49.451" cy="50.402" rx="4.552" ry="4.616"/>
					</g>
					</svg>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
