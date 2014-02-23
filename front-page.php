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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-1.jpg" alt="">
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
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
