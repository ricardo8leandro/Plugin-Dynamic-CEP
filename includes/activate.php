<?php 

function rl_activate_plugin(){

    if( version_compare(get_bloginfo('version'), '4.5', '<')) {

        wp_die(__('Você precisa atualizar o wordpress para atualizar este plugin', 'dynamic-cep'));
        
    }

}