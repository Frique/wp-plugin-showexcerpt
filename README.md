WP Plugin: Show Excerpt
=====================

Extremely basic plugin to add an [excerpt] shortcode that will print out the Excerpt (if it exists), wrapped in predefined (plugin options) "before" and "after" stuff.
Also has a button in the admin text editor (HTML tab).

This will prevent repetition (copy part of an article to the excerpt box and vice versa) and allows to define default styling around your excerpt without letting the theme load it in a default location. Think [article intro], [excerpt], [article continued].

Available options (shortcode attributes) are:
* display: inline or block
* block_before: Text/HTML to print before the excerpt if display is block
* block_after: Text/HTML to print after the excerpt if display is block
* inline_before: Text/HTML to print before the excerpt if display is inline
* inline_after: Text/HTML to print after the excerpt if display is inline

Example 1: <code>[shortcode]</code><br />
Example 2: <code>[shortcode display="inline"]</code>
