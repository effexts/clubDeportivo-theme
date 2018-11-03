<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Club Deportivo UTA
 */
?>
            <header>
                <h1 class="entry-title"><?php esc_html_e( 'Nada encontrado', 'club-deportivo' ); ?></h1>
            </header>

	<div class="blog-post">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_attr__( 'Listo para publicar tu primer post? <a href="%1$s">Comienza aquí</a>.', 'club-deportivo' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Lo sentimos, pero no se ha encontrada nada con los términos de búsqueda. Por favor intenta nuevamente con otras palabras.', 'club-deportivo' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Al parecer no podemos encontrar lo que estás buscando. Quizás hacer una búsqueda puede ayudar.', 'club-deportivo' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>