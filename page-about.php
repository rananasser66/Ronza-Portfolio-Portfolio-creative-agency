<?php
/**
 * Template for displaying the About page.
 *
 * @package Ronza
 */

get_header();
?>

<main id="primary" class="site-main about-page">
    <section class="innerPage-hero">
        <div class="container">
            <p class="innerPage-hero__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_about_hero_eyebrow', 'About Ronza' ) ); ?></p>
            <h1 class="innerPage-hero__title"><?php the_title(); ?><span>.</span></h1>
            <p class="innerPage-hero__description"><?php echo esc_html( get_theme_mod( 'ronza_about_hero_description', 'We are a team of designers, developers and problem solvers passionate about creating digital experiences that make an impact.' ) ); ?></p>
        </div>
    </section>

    <?php if ( get_theme_mod( 'ronza_about_show_story', true ) ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <section class="about-story section reveal">
                <div class="container about-story__inner">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="about-story__image section-image"><?php the_post_thumbnail( 'large', array( 'class' => 'about-story__thumbnail' ) ); ?></div>
                    <?php endif; ?>
                    <div class="about-story__content">
                        <p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_about_story_eyebrow', 'Our Story' ) ); ?></p>
                        <h2><?php echo esc_html( get_theme_mod( 'ronza_about_story_title', 'Building better digital experiences.' ) ); ?><span class="fullStop">.</span></h2>
                        <div class="about-story__text"><?php the_content(); ?></div>
                        <a class="button button--primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php echo esc_html('Get Started', 'Ronza'); ?></a>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'ronza_about_show_values', true ) ) : ?>
        <section class="about-values section section--light reveal">
            <div class="container">
                <div class="section-header">
                    <p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_about_values_eyebrow', 'What Drives Us' ) ); ?></p>
                    <h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_about_values_title', 'Our mission and vision.' ) ); ?><span class="fullStop">.</span></h2>
                </div>
                <div class="about-values__grid">
                    <article class="about-value">
                        <div class="about-value_container">
                            <div class="about-value_container_icon"><span><i class="fa-solid fa-bullseye"></i></span></div>
                            <div class="about-value_container_content">
                                <h3><?php echo esc_html( get_theme_mod( 'ronza_about_mission_title', 'Our Mission' ) ); ?></h3>
                                <p><?php echo esc_html( get_theme_mod( 'ronza_about_mission_text', 'To help businesses create powerful digital experiences through thoughtful design and reliable technology.' ) ); ?></p>
                            </div>
                        </div>
                    </article>
                    <article class="about-value">
                        <div class="about-value_container">
                            <div class="about-value_container_icon"><span><i class="fa-solid fa-eye"></i></span></div>
                            <div class="about-value_container_content">
                                <h3><?php echo esc_html( get_theme_mod( 'ronza_about_vision_title', 'Our Vision' ) ); ?></h3>
                                <p><?php echo esc_html( get_theme_mod( 'ronza_about_vision_text', 'To make professional, high-performing websites accessible to businesses of every size.' ) ); ?></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'ronza_about_show_stats', true ) ) : ?>
        <section class="about-stats section section--light reveal">
            <div class="container">
                <div class="about-stats__grid">
                    <div class="about-stat">
                        <span class="about-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_about_stat_1_icon', 'fa-solid fa-award' ) ); ?>"></i></span>
                        <strong class="about-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_about_stat_1_number', '10+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_about_stat_1_number', '10+' ) ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod( 'ronza_about_stat_1_label', 'Years Experience' ) ); ?></span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_about_stat_2_icon', 'fa-solid fa-briefcase' ) ); ?>"></i></span>
                        <strong class="about-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_about_stat_2_number', '100+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_about_stat_2_number', '100+' ) ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod( 'ronza_about_stat_2_label', 'teams Completed' ) ); ?></span>
                    </div>
                    <div class="about-stat">
                        <span class="about-stat__icon"><i class="<?php echo esc_html( get_theme_mod( 'ronza_about_stat_3_icon', 'fa-solid fa-earth-europe' ) ); ?>"></i></span>
                        <strong class="about-stat__number" data-target="<?php echo esc_attr( get_theme_mod( 'ronza_about_stat_3_number', '20+' ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_about_stat_3_number', '20+' ) ); ?></strong>
                        <span><?php echo esc_html( get_theme_mod( 'ronza_about_stat_3_label', 'Countries Reached' ) ); ?></span>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'ronza_about_show_team', true ) ) : ?>
         <section class="about-team section section--light reveal">
            <div class="container">
                <div class="section-header">
                    <p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_about_team_eyebrow', 'Our Team' ) ); ?></p>
                    <h2 class="section-header__title"><?php echo esc_html( get_theme_mod( 'ronza_about_team_title', 'People behind the work.' ) ); ?><span class="fullStop">.</span></h2>
                </div>

                <div class="about-team__grid">
                   <!--  <div class="team-member">
                        
                    </div> -->
                    <?php
                    $team = new WP_Query(array(
                        'post_type'=>'ronza_team',
                        'posts_per_page'=> -1,
                        'post_status'=>'publish',
                        'orderby'=>'date',
                        'order'=>'ASC',
                        'no_found_rows'=>true,
                    )); ?>
                    <?php if ( $team->have_posts() ) : ?>
                        <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'team-member' ); ?>>
                                <div class="team-member__image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'medium_large', array( 'class' => 'team-member__thumbnail' ) ); ?>
                                    <?php else : ?>
                                        <span><?php esc_html_e( 'Team Member Image', 'ronza' ); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="team-member__content">
                                    <h3 class="team-member__title"><?php the_title(); ?></h3>
                                    <?php $role = get_post_meta(get_the_ID(), '_ronza_team_role', true);
                                    $linkedin = get_post_meta(get_the_ID(), '_ronza_team_linkedin', true); ?>

                                    <?php if ($role) : ?>
                                        <p class="team-member__role"><?php echo esc_html($role); ?></p>
                                    <?php endif; ?>

                                    <?php if ($linkedin) : ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" el="noopener noreferrer" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php esc_html_e( 'No Team have been added yet.', 'ronza' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
    <?php if ( get_theme_mod( 'ronza_about_show_cta', true ) ) : ?>
        <section class="cta">
            <div class="container cta__inner">
                <div class="cta__content reveal">
                    <p class="cta__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_about_cta_eyebrow', 'Ready to get started?' ) ); ?></p>
                    <h2 class="cta__title"><?php echo esc_html( get_theme_mod( 'ronza_about_cta_title', 'Create something remarkable.' ) ); ?><span class="fullStop-light">.</span></h2>
                </div>
                <a class="button button--light" href="<?php echo esc_url( home_url( get_theme_mod( 'ronza_about_cta_button_url', '/contact/' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_about_cta_button_text', 'Contact Us' ) ); ?></a>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>