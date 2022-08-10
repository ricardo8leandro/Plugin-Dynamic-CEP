<?php
/**
 * Plugin Name:       Dynamic CEP
 * Plugin URI:        https://github.com/ricardo8leandro
 * Description:       Consulta de CEP via API com shortcode dinâmico. Utilize o shortcode [form_check_cep] 
 * no local que deseja a consulta de CEP.
 * Version:           1.0.0
 * Author:            Ricardo Leandro
 * Author URI:        https://github.com/ricardo8leandro
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dynamic-cep
 */

 if(!function_exists('add_action')) {
    echo "Acesso negado !";
    exit;
 }

 //Includes
include('includes/activate.php');
include('includes/enqueue.php');
include('consulta-cep.php');

 //Hooks
 register_activation_hook(__FILE__, 'rl_activate_plugin');


 //Shortcodes
 add_shortcode('form_check_cep','rl_form_cep');