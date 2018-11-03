<?php
/**
 * The template for displaying search forms in Club Deportivo UTA
 *
 * @package Club Deportivo UTA
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Buscar...', 'club-deportivo' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_e( 'Buscar', 'club-deportivo' ); ?>">
</form>
