<?php

add_action( 'wp_print_scripts','iuniversal_dequeue_scripts' );
function iuniversal_dequeue_scripts() {
	wp_dequeue_script( 'universal.a11y' );
}