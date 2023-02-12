<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Autopart
 */

?>

<div id="post-<?php the_ID(); ?>" class=" container">
	<?php autoparts_post_thumbnail();
		the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
