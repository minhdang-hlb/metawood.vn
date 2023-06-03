<?php
/**
 * Additional Information tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/additional-information.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see           https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', esc_html__( 'Additional Information', 'sober' ) );

?>
<div class="row">
	<div class="col-sm-12 col-md-8 col-md-offset-2">
		<?php if ( $heading ): ?>
			<h2><?php echo wp_kses_post( $heading ); ?></h2>
		<?php endif; ?>

		<?php
		if ( version_compare( WC()->version, '3.0.0', '<' ) ) {
			$product->list_attributes();
		} else {
			do_action( 'woocommerce_product_additional_information', $product );
		}
		?>
	</div>
</div>