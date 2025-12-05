<?php
/**
 * ヘッダーテンプレート
 *
 * @package Qilin_Electric
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e( 'コンテンツへスキップ', 'qilin-electric' ); ?>
    </a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <div class="site-identity">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo esc_html( $description ); ?></p>
                        <?php
                    endif;
                    ?>
                </div>

                <div class="header-actions">
                    <div class="header-phone">
                        <span class="phone-icon">📞</span>
                        <a href="tel:090-3282-3943" class="phone-number">090-3282-3943</a>
                    </div>
                    <a href="http://qilin-electric.com/script/mailform/main/" class="btn btn-header-contact">お問い合わせ</a>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>
