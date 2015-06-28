<?php
/*
Plugin Name: Show Excerpt
Plugin URI: http://frique.me/
Description: Shortcode [excerpt] will print the Excerpt in a configurable tag.
Version: 1.0
Author: Berend // frique.me
Author URI: http://frique.me/
*/

// The shortcode
function showexcerpt_shortcode( $attributes, $content ) {

	// Defaults
	$defaults['tag'] = 'p';
	$defaults['styled'] = true;
	$defaults['class'] = '';

	// Merge supplied attributes with defaults
	$attributes = shortcode_atts(
		$defaults,
		$attributes,
		'excerpt'
	);

	// Return
	if ( get_the_excerpt() ) {
		$return = '<' . esc_attr( $attributes['tag'] ) . ' class="excerpt' . ( ( $attributes['styled'] ) ? ' excerpt--styled' : '' ) . ( ( $attributes['class'] ) ? esc_attr( $attributes['class'] ) : '' ) '">';
		$return .= get_the_excerpt();
		$return .= '</' . esc_attr( $attributes['tag'] ) . '>';
		return $return;
	}
	return '';

}
add_shortcode( 'excerpt', 'showexcerpt_shortcode' );

// Add button to admin text editor (HTML tab)
function showexcerpt_addeditorbutton() {
	?>
	<script type="text/javascript">
		QTags.addButton(
			"quicktag-showexcerpt",                            // Button id-attribute
			"[excerpt]",                                       // Button text
			"[excerpt]",                                       // Opening tag
			"",                                                // Closing tag
			"",                                                // Shortcut key
			"<?php __( 'Insert excerpt', 'showexcerpt' ); ?>", // Button title-attribute
			300                                                // Priority
		);
	</script>
	<?php
}
add_action( 'admin_print_footer_scripts', 'showexcerpt_addeditorbutton' );
