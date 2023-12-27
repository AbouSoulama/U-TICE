<?php
/**
 * Displays footer site info
 *
 * @subpackage Soccer Academy
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
    <?php
        echo esc_html( get_theme_mod( 'soccer_academy_footer_text' ) );
        printf(
            /* translators: %s: Soccer Academy WordPress Theme. */
            '<a target="_blank" href="' . esc_url( 'https://www.ovationthemes.com/wordpress/free-soccer-wordpress-theme/') . '"> %s</a>',
            esc_html__( 'Soccer Academy WordPress Theme', 'soccer-academy' )
        );
    ?>
</div>