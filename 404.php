<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Club Deportivo UTA
 */

get_header(); ?>

<div class="container">
    <div class="page_content">
        <section class="site-main" id="sitemain">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_attr_e( '404 No encontrado', 'club-deportivo' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php esc_html_e( 'Al parecer, el pase llegó demasiado lejos. No te preocupes, nos pasa hasta a los mejores.', 'club-deportivo' ); ?></p>
               
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>