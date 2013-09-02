WP Plugin: Show Excerpt
=====================

Extremely basic plugin to add an [excerpt] shortcode that will print out the Excerpt (if it exists), wrapped in a predefined tag.
Also has a button in the admin text editor (HTML tab).
Also adds a class "except" to the tag.

This will prevent repetition (copy part of an article to the excerpt box and vice versa) and allows to define default styling around your excerpt without letting the theme load it in a default location. Think [article intro], [excerpt], [article continued].

Available options (shortcode attributes) are:
* tag: p, span, em etc. The default is "p".
* styled: usable when you sometimes want to style the block differently and sometimes as regular text. Adds the class "excerpt--styled" when true. The default is true.

Example 1: <code>[shortcode]</code><br />
Example 2: <code>[shortcode tag="span" styled="0"]</code>