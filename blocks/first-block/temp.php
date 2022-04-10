<?php


function gutenberg_examples_01_register_block() {




	echo '<pre>';
	var_dump( __DIR__ );
	echo '</pre>';
	die();
	register_block_type( __DIR__ );
}
add_action( 'init', 'gutenberg_examples_01_register_block' );