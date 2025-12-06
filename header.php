<?php
/**
 * Header template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="site-wrapper">
    <header class="site-header">
        <div class="header-inner">
            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>

            <nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'realfoodhome' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
    </header>
