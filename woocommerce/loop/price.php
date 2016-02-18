<?php
/**
 * Loop Price
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price">Sale Price: <?php echo $price_html; ?></span>
<?php endif; ?>


<?php $postid = get_the_ID(); ?>
<?php if ( get_post_meta($postid, 'Rental Price', true) ) : ?>
<span class="price">Rent Price: $<?php echo esc_html(get_post_meta($postid, 'Rental Price', true));?></span>
<?php endif; ?>

