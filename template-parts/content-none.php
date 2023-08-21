<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AIO_Video_Downloader_Default
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php pll_e( 'Nothing Found'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'aiodl-default' ),
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

			<p><?php pll_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php pll_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.'); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
