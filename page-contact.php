<?php
/**
 * Template for displaying the Contact page.
 *
 * @package Ronza
 */

get_header();
?>

<main id="primary" class="site-main contact-page">
    <section class="innerPage-hero">
        <div class="container">
            <p class="innerPage-hero__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_contact_hero_eyebrow', 'Get In Touch' ) ); ?></p>
            <h1 class="innerPage-hero__title"><?php the_title(); ?><span class="fullStop">.</span></h1>
        </div>
    </section>

    <?php if ( get_theme_mod( 'ronza_contact_show_info', true ) || get_theme_mod( 'ronza_contact_show_form', true ) ) : ?>
        <section class="contact-main section">
            <div class="container contact-main__grid">
               <?php if ( get_theme_mod( 'ronza_contact_show_info', true ) ) : ?>
                    <div class="contact-info">
                        <p class="section-header__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_contact_info_eyebrow', 'Contact Us' ) ); ?></p>
                        <h2><?php echo esc_html( get_theme_mod( 'ronza_contact_info_title', 'Let’s start a conversation' ) ); ?><span class="fullStop">.</span></h2>
                        <p class="contact-info__description"><?php echo esc_html( get_theme_mod( 'ronza_contact_info_description', 'Have a project in mind or simply want to learn more? We would love to hear from you.' ) ); ?></p>

                        <?php
                        $contact_email = get_theme_mod( 'ronza_contact_email', '' );
                        $contact_phone = get_theme_mod( 'ronza_contact_phone', '' );
                        $contact_address = get_theme_mod( 'ronza_contact_address', '' );
                        $contact_hours = get_theme_mod( 'ronza_contact_hours', '' );
                        ?>

                        <?php if ( $contact_email || $contact_phone || $contact_address || $contact_hours ) : ?>
                            <div class="contact-details">
                                <?php if ( $contact_email ) : ?>
                                    <div class="contact-detail">
                                        <span class="contact-detail__label"><i class="fa-solid fa-envelope"></i><?php esc_html_e( 'Email', 'ronza' ); ?></span>
                                        <a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $contact_phone ) : ?>
                                    <div class="contact-detail">
                                        <span class="contact-detail__label"><i class="fa-solid fa-phone"></i><?php esc_html_e( 'Phone', 'ronza' ); ?></span>
                                        <a href="tel:<?php echo esc_attr( $contact_phone ); ?>"><?php echo esc_html( $contact_phone ); ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $contact_address ) : ?>
                                    <div class="contact-detail">
                                        <span class="contact-detail__label"><i class="fa-solid fa-location-dot"></i><?php esc_html_e( 'Address', 'ronza' ); ?></span>
                                        <span><?php echo esc_html( $contact_address ); ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $contact_hours ) : ?>
                                    <div class="contact-detail">
                                        <span class="contact-detail__label"><i class="fa-solid fa-clock"></i><?php esc_html_e( 'Working Hours', 'ronza' ); ?></span>
                                        <span><?php echo esc_html( $contact_hours ); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'ronza_contact_show_form', true ) ) : ?>
                    <div class="contact-form">
                        <div class="contact-form__header">
                            <p class="section-header__eyebrow"><?php esc_html_e( 'Send A Message', 'ronza' ); ?></p>
                            <h2><?php echo esc_html( get_theme_mod( 'ronza_contact_form_title', 'Tell us about your project' ) ); ?><span class="fullStop">.</span></h2>
                        </div>
                        <?php $contact_form = get_theme_mod( 'ronza_contact_form_shortcode', '' ); ?>
                        <?php if ( $contact_form ) : ?>
                            <div class="contact-form__content"><?php echo do_shortcode( $contact_form ); ?></div>
                        <?php else : ?>
                            <div class="contact-form__placeholder">
                                <p><?php esc_html_e( 'Add your contact form shortcode from Appearance → Customize → Ronza Contact Page.', 'ronza' ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( get_theme_mod( 'ronza_contact_show_cta', true ) ) : ?>
        <section class="cta">
            <div class="container cta__inner">
                <div class="cta__content">
                    <p class="cta__eyebrow"><?php echo esc_html( get_theme_mod( 'ronza_contact_cta_eyebrow', 'Let’s work together' ) ); ?></p>
                    <h2 class="cta__title"><?php echo esc_html( get_theme_mod( 'ronza_contact_cta_title', 'Have a project in mind' ) ); ?><span class="fullStop-light">?</span></h2>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>