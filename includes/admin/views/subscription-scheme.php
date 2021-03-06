<?php
/**
 * Admin subscription scheme view.
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?><div class="subscription_scheme wc-metabox open" rel="<?php echo isset( $scheme_data[ 'position' ] ) ? $scheme_data[ 'position' ] : ''; ?>">
	<h3>
		<span class="scheme-title"></span>
		<button type="button" class="remove_row button"><?php echo __( 'Remove', 'woocommerce' ); ?></button>
	</h3>
	<div class="subscription_scheme_data wc-metabox-content"><?php

		// Basic Subscription Scheme Options.
		do_action( 'wcsatt_subscription_scheme_content', $index, $scheme_data, $post_id );

		// Additional Subscription Options for Products.
		if ( $post_id > 0 ) {

			do_action( 'wcsatt_subscription_scheme_product_content', $index, $scheme_data, $post_id );

		}
		?></div>
	<?php
	if ( isset( $scheme_data[ 'id' ] ) ) {
		?><input type="hidden" name="wcsatt_schemes[<?php echo $index; ?>][id]" class="scheme_id" value="<?php echo $scheme_data[ 'id' ]; ?>" /><?php
	}
	?><input type="hidden" name="wcsatt_schemes[<?php echo $index; ?>][position]" class="position" value="<?php echo isset( $scheme_data[ 'position' ] ) ? $index : ''; ?>"/>
</div>
