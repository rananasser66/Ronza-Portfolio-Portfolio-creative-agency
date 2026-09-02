<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'ronza' ); ?></a>
<?php
$header_classes = array( 'site-header' );
$transparentHeader =  get_theme_mod( 'ronza_header_transparent', false );

if ( get_theme_mod( 'ronza_header_sticky', true ) ) {
    $header_classes[] = 'site-header--sticky';
}

if ( $transparentHeader ) {
    $header_classes[] = 'site-header--transparent';
}
?>
<header class="<?php echo esc_attr( implode( ' ', $header_classes ) ); ?>">
    <div class="container site-header__inner">
        <div class="site-branding">
           <a class="site-branding__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php $logo = get_theme_mod( 'ronza_logo', 0 ); 
                $secondary_logo = get_theme_mod( 'ronza_secoundary_logo', 0 ); ?>
                <?php if ( $logo ) : 
                    if(is_front_page()): ?>
                        <?php echo wp_get_attachment_image( $logo, 'full', false, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
                     <?php elseif($transparentHeader): ?>
                        <?php echo wp_get_attachment_image( $secondary_logo, 'full', false, array( 'alt' => get_bloginfo( 'name' ) ) );
                    else: ?>
                        <?php echo wp_get_attachment_image( $logo, 'full', false, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
                <?php endif; else : ?>
                    <span><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>
        </div>
        <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
            <span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'ronza' ); ?></span>
            <span class="menu-toggle__icon" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <nav class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'ronza' ); ?>">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                )
            ); ?>
            <div class="site-header__actions">
                <?php if ( get_theme_mod( 'ronza_header_search', true ) ) : ?>
                    <div class="site-header__search">
                        <button class="search-toggle" type="button" aria-expanded="false" aria-controls="header-search-form">
                            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                            <span class="screen-reader-text"><?php esc_html_e( 'Open search', 'ronza' ); ?></span>
                        </button>

                        <form id="header-search-form" class="header-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-hidden="true">
                            <label class="screen-reader-text" for="header-search"><?php esc_html_e( 'Search for:', 'ronza' ); ?></label>
                            <input id="header-search" type="search" name="s" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'ronza' ); ?>" tabindex="-1">

                            <button class="header-search-form__submit" type="submit" tabindex="-1">
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                <span class="screen-reader-text"><?php esc_html_e( 'Search', 'ronza' ); ?></span>
                            </button>
                        </form>
                    </div>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'ronza_header_cta', true ) ) : ?>
                    <a class="button button--primary" href="<?php echo esc_url( home_url( get_theme_mod( 'ronza_header_cta_url', '/contact/' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'ronza_header_cta_text', 'Get Started' ) ); ?></a>
                <?php endif; ?>
            </div>
        </nav>
        
    </div>
</header>
<main id="primary" class="site-main <?php echo is_page_template('page-full-width.php') ? 'site-main--full-width' : ''; ?>">