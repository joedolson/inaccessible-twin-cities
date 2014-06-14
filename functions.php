<?php

add_action( 'wp_print_scripts','atc_dequeue_scripts' );
function atc_dequeue_scripts() {
	wp_dequeue_script( 'atc.a11y' );
}