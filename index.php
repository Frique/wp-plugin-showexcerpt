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
function showexcerpt_shortcode($attributes, $content){

	// Defaults (TODO: as plugin options)
	$defaults['tag'] = 'p';
	$defaults['styled'] = true;

	// Merge supplied attributes with defaults
	$attributes = shortcode_atts(
		$defaults,
		$attributes,
		'showexcerpt_shortcode'
	);

	// Return
	if(get_the_excerpt()){
		$return = '<'.$attributes['tag'].' class="excerpt'.(($attributes['styled']) ? ' excerpt--styled' : '').'">';
		$return .= get_the_excerpt();
		$return .= '</'.$attributes['tag'].'>';
		return $return;
	}
	return '';

}
add_shortcode('excerpt', 'showexcerpt_shortcode');

// Add button to admin text editor (HTML tab)
function showexcerpt_addeditorbutton(){
	?>
	<script type="text/javascript">
		QTags.addButton(
			"quicktag-showexcerpt",                          // Button id-attribute
			"[excerpt]",                                     // Button text
			"[excerpt]",                                     // Opening tag
			"",                                              // Closing tag
			"",                                              // Shortcut key
			"<?php __('Insert excerpt', 'showexcerpt'); ?>", // Button title-attribute
			300                                              // Priority
		);
	</script>
	<?php
}
add_action('admin_print_footer_scripts', 'showexcerpt_addeditorbutton');

// Add admin option page
// TODO