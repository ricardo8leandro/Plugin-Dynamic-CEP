<?php
function scriptscep()
{
	wp_register_script( 'scriptCep', plugins_url( 'assets/js/calc-cep.js', __DIR__ ), array( 'jquery' ), '3.6', false );
	wp_enqueue_script( 'scriptCep' );
}
add_action( 'wp_enqueue_scripts', 'scriptscep' );

function inputMask()
{
	wp_register_script( 'inputMaskJs', plugins_url( 'assets/js/jquery.mask.min.js', __DIR__ ), array( 'jquery' ), '3.6', false );
	wp_enqueue_script( 'inputMaskJs' );

}
add_action( 'wp_enqueue_scripts', 'inputMask' );


function stylecep() 
{
	wp_register_style( 'cssstylecep', plugins_url( 'assets/css/style-cep.css', __DIR__ ) );
	wp_enqueue_style( 'cssstylecep');
}

add_action('wp_enqueue_scripts', 'stylecep' );

