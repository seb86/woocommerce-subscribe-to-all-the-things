<?php
/**
 * Single-Product Subscription Options Template.
 *
 * Override this template by copying it to 'yourtheme/woocommerce/product-options.php'.
 *
 * @version 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<h3><?php
	if ( $allow_one_time ) {
		echo sprintf( __( 'Subscribe to &quot;%s&quot;?', WCS_ATT::TEXT_DOMAIN ), $product->get_title() );
	} else {
		echo sprintf( __( 'Sign up for &quot;%s&quot;:', WCS_ATT::TEXT_DOMAIN ), $product->get_title() );
	}
?></h3>

<ul class="wcsatt-convert-product"><?php

	foreach ( $options as $option ) {
		?><li>
			<label>
				<input type="radio" name="convert_to_sub_<?php echo $product->id; ?>" value="<?php echo $option[ 'id' ]; ?>" <?php checked( $option[ 'selected' ], true, true ); ?> />
				<?php echo $option[ 'description' ]; ?>
			</label>
		</li><?php
	}

?></ul>
