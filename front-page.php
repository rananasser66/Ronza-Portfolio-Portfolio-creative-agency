<?php
/**
 * The template for displaying the front page.
 *
 * @package Ronza
 */

get_header();
?>

<?php if ( get_theme_mod( 'ronza_hero_show', true ) ) : ?>
	<?php
	$hero_background_type = get_theme_mod( 'ronza_hero_background_type', 'color' );
	$hero_background_color = get_theme_mod( 'ronza_hero_background_color', '#111111' );
	$hero_background_image = get_theme_mod( 'ronza_hero_background_image', 0 );
	$hero_overlay_color = get_theme_mod( 'ronza_hero_overlay_color', '#000000' );
	$hero_overlay_opacity = min(100,max(0,absint(get_theme_mod('ronza_hero_overlay_opacity',45))));
	$hero_style = '';
	$hero_class = 'hero';

	if ( 'image' === $hero_background_type && $hero_background_image ) {
		$hero_image_url = wp_get_attachment_image_url( $hero_background_image, 'large' );
		if ( $hero_image_url ) {
			$hero_class .= ' hero--image';
			$hero_style = ' style="background-image:url(' . esc_url( $hero_image_url ) . ');"';
		}
	} else {
		$hero_class .= ' hero--color';
		$hero_style = ' style="--hero-background-color:' . esc_attr( $hero_background_color ) . ';"';
	}
	?>
	<section class="<?php echo esc_attr($hero_class); ?>"<?php echo $hero_style; ?>>
		<?php if ( 'image' === $hero_background_type && $hero_background_image ) : ?>
			<div class="hero__overlay" style="--hero-overlay-color:<?php echo esc_attr($hero_overlay_color); ?>;--hero-overlay-opacity:<?php echo esc_attr($hero_overlay_opacity / 100); ?>;"></div>
		<?php endif; ?>
		<div class="container hero__inner">
			<div class="hero__content">
				<p class="hero__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_hero_eyebrow', 'Modern WordPress Theme' ) ); ?></p>
				<h1 class="hero__title"><?php echo esc_html( get_theme_mod( 'ronza_hero_title', 'Build a better digital presence.' ) ); ?><span class="fullStop">.</span></h1>
				<p class="hero__description"><?php echo esc_html( get_theme_mod( 'ronza_hero_description', 'A modern, flexible and performance-focused WordPress theme designed for businesses, creators and agencies.' ) ); ?></p>
				<div class="hero__actions">
					<?php if ( get_theme_mod('ronza_hero_show_primary_button',true) ) : ?>
						<a class="button button--primary" href="<?php echo esc_url( get_theme_mod( 'ronza_hero_primary_url', '#services' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_hero_primary_text', 'Get Started' ) ); ?></a>
					<?php endif; if ( get_theme_mod('ronza_hero_show_secondary_button',true) ) : ?>
						<a class="button button--secondary" href="<?php echo esc_url( get_theme_mod( 'ronza_hero_secondary_url', '#portfolio' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_hero_secondary_text', 'Explore More' ) ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_home_show_stats', true ) ) : ?>
    <section class="home-stats">
        <div class="container">
            <div class="home-stats__grid reveal">
                <div class="home-stat" data-rz-stats>
                	<span class="home-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_home_stat_1_icon', 'fa-solid fa-users' ) ); ?>"></i></span>
                    <strong class="home-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_home_stat_1_number', '10+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_1_number', '10+' ) ); ?></strong>
                    <span class="home-stat__label"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_1_label', 'Years Experience' ) ); ?></span>
                </div>
                <div class="home-stat">
                	<span class="home-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_home_stat_2_icon', 'fa-solid fa-thumbs-up' ) ); ?>"></i></span>
                    <strong class="home-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_home_stat_2_number', '100+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_2_number', '100+' ) ); ?></strong>
                    <span class="home-stat__label"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_2_label', 'Projects Completed' ) ); ?></span>
                </div>
                <div class="home-stat">
                	<span class="home-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_home_stat_3_icon', 'fa-solid fa-briefcase' ) ); ?>"></i></span>
                    <strong class="home-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_home_stat_3_number', '20+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_3_number', '20+' ) ); ?></strong>
                    <span class="home-stat__label"><?php echo esc_html( get_theme_mod( 'ronza_home_stat_3_label', 'Projects Completed' ) ); ?></span>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_home_show_about', true ) ) : ?>
	<section class="about section">
		<div class="container reveal">
			<div class="section-image" data-rz-drift>
				<img src="<?php echo wp_get_attachment_image_url(esc_html( get_theme_mod( 'ronza_home_about_image', 0 ) ), 'large' ); ?>">
			</div>
			<div class="section-header">
				<p class="section-header__eyebrow" data-rz-reveal><?php echo esc_html( get_theme_mod( 'ronza_about_eyebrow', 'Who We Are' ) ); ?></p>
				<h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_about_title', 'Built on experience. Focused on results.' ) ); ?><span class="fullStop">.</span></h2>
				<p class="section-header__description"><?php echo esc_html( get_theme_mod( 'ronza_about_description', 'We combine practical expertise, clear thinking, and a commitment to quality to deliver solutions that create lasting value.' ) ); ?></p>
				<a class="button button--primary" href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php echo esc_html('Learn more', 'Ronza'); ?></a>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_services_show', true ) ) : ?>
	<section id="services" class="services section">
		<div class="container reveal">
			<div class="section-header">
				<p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_services_eyebrow', 'What We Offer' ) ); ?></p>
				<h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_services_title', 'Everything you need to grow online.' ) ); ?><span class="fullStop">.</span></h2>
				<p class="section-header__description"><?php echo esc_html( get_theme_mod( 'ronza_services_description', 'Powerful tools and flexible layouts designed to help you create a professional website.' ) ); ?></p>
			</div>
			<div class="services__grid" data-rz-stagger>
				<?php
				$service_defaults = array(
					1 => array( 'Modern Design', 'Clean and modern layouts that look beautiful across every screen size.' ),
					2 => array( 'Performance', 'Built with performance and a lightweight frontend architecture in mind.' ),
					3 => array( 'Fully Responsive', 'Your website will look great on desktops, tablets and mobile devices.' ),
				);
				?>
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<?php if ( get_theme_mod( "ronza_service_{$i}_show", true ) ) : ?>
						<?php
						$service_title = trim( get_theme_mod( "ronza_service_{$i}_title", $service_defaults[ $i ][0] ) );
						$service_description = trim( get_theme_mod( "ronza_service_{$i}_description", $service_defaults[ $i ][1] ) );

						if ( '' === $service_title ) {
							$service_title = $service_defaults[ $i ][0];
						}

						if ( '' === $service_description ) {
							$service_description = $service_defaults[ $i ][1];
						}
						?>
						<article class="service-card">
							<div class="service-card__icon"><?php echo esc_html( str_pad( $i, 2, '0', STR_PAD_LEFT ) ); ?></div>
							<h3 class="service-card__title"><?php echo esc_html( $service_title ); ?></h3>
							<p class="service-card__description"><?php echo esc_html( $service_description ); ?></p>
						</article>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_portfolio_show', true ) ) : ?>
	<section id="portfolio" class="portfolio section">
		<div class="container reveal">
			<div class="section-header">
				<p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_portfolio_eyebrow', 'Selected Work' ) ); ?></p>
				<h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_portfolio_title', 'Featured projects.' ) ); ?><span class="fullStop">.</span></h2>
				<?php $portfolio_description = get_theme_mod( 'ronza_portfolio_description', '' ); ?>
				<?php if ( $portfolio_description ) : ?>
					<p class="section-header__description"><?php echo esc_html( $portfolio_description ); ?></p>
				<?php endif; ?>
			</div>
			<div class="portfolio__grid">
				<?php
				$projects = new WP_Query(array(
					'post_type'=>'ronza_project',
					'posts_per_page'=>max(1,absint(get_theme_mod('ronza_portfolio_count',3))),
					'post_status'=>'publish',
					'orderby'=>'date',
					'order'=>'DESC',
					'no_found_rows'=>true,
				));
				?>
				<?php if ( $projects->have_posts() ) : ?>
					<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-card' ); ?> data-rz-project>
							<a class="portfolio-card__link" href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="portfolio-card__image">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'medium_large', array( 'class' => 'portfolio-card__thumbnail' ) ); ?>
									<?php else : ?>
										<span><?php esc_html_e( 'Project Image', 'ronza' ); ?></span>
									<?php endif; ?>
								</div>
								<div class="portfolio-card__content">
									<?php $type = get_the_terms(get_the_ID(), 'project_type'); ?>
									<p class="portfolio-card__category"><?php echo esc_html($type[0]->name); ?></p>
									<h3 class="portfolio-card__title"><?php the_title(); ?></h3>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'No projects have been added yet.', 'ronza' ); ?></p>
				<?php endif; ?>
			</div>
			<?php if ( get_theme_mod( 'ronza_portfolio_show_button', true ) ) : ?>
				<?php $portfolio_button_url = get_theme_mod( 'ronza_portfolio_button_url', '' ) ?: get_post_type_archive_link( 'ronza_project' ); ?>
				<div class="portfolio__action">
					<a class="button button--primary" href="<?php echo esc_url( $portfolio_button_url ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_portfolio_button_text', 'View All Projects' ) ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_blog_show', true ) ) : ?>
	<section id="blog" class="blog-preview section section--light">
		<div class="container reveal">
			<div class="section-header">
				<p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_blog_eyebrow', 'From the Blog' ) ); ?></p>
				<h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_blog_title', 'Latest articles.' ) ); ?><span class="fullStop">.</span></h2>
				<p class="section-header__description"><?php echo esc_html( get_theme_mod( 'ronza_blog_description', 'Insights, ideas and practical tips for building better digital experiences.' ) ); ?></p>
			</div>
			<div class="blog-preview__grid" data-rz-blog>
				<?php
				$latest_posts = new WP_Query(array(
					'post_type'=>'post',
					'posts_per_page'=>max(1,absint(get_theme_mod('ronza_blog_count',3))),
					'post_status'=>'publish',
					'ignore_sticky_posts'=>true,
					'no_found_rows'=>true,
				));
				?>
				<?php if ( $latest_posts->have_posts() ) : ?>
					<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-preview__card' ); ?>>
							<a class="blog-preview__link" href="<?php the_permalink(); ?>">
								<?php if ( get_theme_mod( 'ronza_blog_show_image', true ) ) : ?>
									<div class="blog-preview__image">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'medium_large', array( 'class' => 'blog-preview__thumbnail' ) ); ?>
										<?php else : ?>
											<div class="blog-preview__placeholder"><?php esc_html_e( 'Ronza', 'ronza' ); ?></div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<div class="blog-preview__content">
									<?php if ( get_theme_mod( 'ronza_blog_show_date', true ) ) : ?>
										<p class="blog-preview__meta"><?php echo esc_html( get_the_date() ); ?></p>
									<?php endif; ?>
									<h3 class="blog-preview__title"><?php the_title(); ?></h3>
									<?php if ( get_theme_mod( 'ronza_blog_show_excerpt', true ) ) : ?>
										<div class="blog-preview__excerpt"><?php the_excerpt(); ?></div>
									<?php endif; ?>
									<?php if ( get_theme_mod( 'ronza_blog_show_read_more', true ) ) : ?>
										<span class="blog-preview__read-more"><?php echo esc_html( get_theme_mod( 'ronza_blog_read_more_text', 'Read Article' ) ); ?></span>
									<?php endif; ?>
								</div>
							</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<?php if ( get_theme_mod( 'ronza_blog_show_button', true ) ) : ?>
				<?php $blog_button_url = get_theme_mod( 'ronza_blog_button_url', '' ) ?: get_permalink( get_option( 'page_for_posts' ) ); ?>
				<div class="blog-preview__action">
					<a class="button button--primary" href="<?php echo esc_url( $blog_button_url ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_blog_button_text', 'View All Articles' ) ); ?></a>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'ronza_home_cta_show', true ) ) : ?>
	<section class="cta">
		<div class="container cta__inner">
			<div class="cta__content reveal">
				<p class="cta__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_home_cta_eyebrow', 'Ready to get started?' ) ); ?></p>
				<h2 class="cta__title"><?php echo esc_html( get_theme_mod( 'ronza_home_cta_title', 'Create something remarkable.' ) ); ?><span class="fullStop-light">.</span></h2>
			</div>
			<a class="button button--light" href="<?php echo esc_url( get_theme_mod( 'ronza_home_cta_button_url', '/contact/' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_home_cta_button_text', 'Contact Us' ) ); ?></a>
		</div>
	</section>
<?php endif; ?>

<?php
get_footer();
