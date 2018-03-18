<?php


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



function my_theme_wrapper_start() {
  echo '<div class="uk-container uk-container-center">';

}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);

function my_theme_wrapper_end() {
  echo '</div>';
}

add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
