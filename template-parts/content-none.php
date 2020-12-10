<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Вспоминая_будущее
 */

?>

	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'remember' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Готовы опубликовать свой первый пост? <a href="%1$s">Нажмите здесь</a>.', 'remember' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'К сожалению, ничего не найдено по вашему запросу. Повторите поиск по другим ключевым словам. ', 'remember' ); ?></p>
			<?php

		else :
			?>

			<p><?php esc_html_e( 'Вероятно, мы не сможем найти то, что вы ищите. Возможно поиск вам поможет.', 'remember' ); ?></p>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
