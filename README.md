WP Plugin: Show Excerpt
=====================

Extremely basic plugin to add an [excerpt] shortcode that will print out the Excerpt (if it exists), wrapped in a predefined tag.
Also has a button in the admin text editor (HTML tab).
Also adds a class "except" to the tag.

This will prevent repetition (copy part of an article to the excerpt box and vice versa) and allows to define default styling around your excerpt without letting the theme load it in a default location. Think [article intro], [excerpt], [article continued].

Available options (shortcode attributes) are:
* tag: p, span, em etc. The default is "p".
* styled: usable when you sometimes want to style the block differently and sometimes as regular text. Adds the class "excerpt--styled" when true (the class "excerpt" is always added). The default is true.
* class: To provide additional CSS classes (separated by space). The default is empty.

Example 1: <code>[excerpt]</code><br />
Example 2: <code>[excerpt tag="span" styled="0" class="additional css classes"]</code>
