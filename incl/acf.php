<?php

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Ustawienia wyglądu strony',
            'menu_title'	=> 'Ustawienia wyglądu',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Strona główna',
            'menu_title'	=> 'Strona główna',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Ustawienia sekcji',
            'menu_title'	=> 'Sekcje',
            'parent_slug'	=> 'theme-general-settings',
        ));

    }

?>
