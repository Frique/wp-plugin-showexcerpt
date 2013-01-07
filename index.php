<?php
/*
Plugin Name: Show Excerpt
Plugin URI: http://frique.me/
Description: Shortcode [excerpt] will print the Excerpt with "before" and "after", managable in plugin options.
Version: 0.1
Author: Berend // frique.me
Author URI: http://frique.me/
*/

function showexcerpt_shortcode($attributes, $content){

	// Defaults (TODO: as plugin options)
	$attributes = shortcode_atts(array(
		'before' => '<em class="excerpt">',
		'after' => '</em>'
	), $attributes);

	// Return
	if(get_the_excerpt()){
		return $attributes['before'].get_the_excerpt().$attributes['after'];
	}
	return '';

}
add_shortcode('excerpt', 'showexcerpt_shortcode');