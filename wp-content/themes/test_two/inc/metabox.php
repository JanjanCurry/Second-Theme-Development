<?php 

function sec_service_icon_function()
{
	add_meta_box( 'service_fontawsome_icon', 'Service Icon', 'service_fontawsome_icon_callback','service','side');
}
function service_fontawsome_icon_callback( $post )
{
	wp_nonce_field( 'service_fontawsome_icon_data', 'service_fontawsome_icon_box_nonce');
	$value = get_post_meta( $post->ID, '_service_fontawsome_icon_value_key', true );
	echo '<label for="service_fontawsome_field"> Place Your Fontawesome Icon Name Here</label>';
	echo '<input type="text" id="service_fontawsome_field" name="service_fontawsome_field" value=" '. esc_attr( $value ) . '" size="25">';
}
add_action( 'add_meta_boxes', 'sec_service_icon_function');

function service_fontawsome_icon_data ( $post_id ) {
	if ( ! isset( $_POST['service_fontawsome_icon_box_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( $_POST['service_fontawsome_icon_box_nonce'], 'service_fontawsome_icon_data' )) {
		return;
	}
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id )) {
		return;
	}
	if ( ! isset( $_POST['service_fontawsome_field'] ) ) {
		return;
	}
	$my_data = sanitize_text_field( $_POST['service_fontawsome_field'] );
	update_post_meta( $post_id, '_service_fontawsome_icon_value_key', $my_data );
}
add_action( 'save_post', 'service_fontawsome_icon_data');