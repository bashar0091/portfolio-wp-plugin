<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => 'Bashar Portfolio',
        'menu_title'           => esc_html__( 'Theme Options', 'bashar-portfolio' ),
        'customizer'           => false,
        'page_priority'             => 50,
    );

    Redux::setArgs( $opt_name, $args );
    
    // Cv button
    Redux::setSection( $opt_name, array(
        'title' => __( 'CV Button', 'bashar-portfolio' ),
        'id'    => 'cv_btn',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'cv_file',
                'type'     => 'media',
                'url'      =>true,
                'title'    => __( 'CV Upload', 'bashar-portfolio' ),
            ),
            array(
                'id'       => 'cv_btn_title',
                'type'     => 'text',
                'url'      =>true,
                'title'    => __( 'Button Title', 'bashar-portfolio' ),
            ),
        )
    ) );


    // color fiel 
    Redux::setSection( $opt_name, array(
        'title' => __( 'Color', 'bashar-portfolio' ),
        'id'    => 'site_color',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'main_color',
                'type'     => 'color',
                'title'    => __( 'Main Color', 'bashar-portfolio' ),
            ),
        )
    ) );

    // social field
    Redux::setSection( $opt_name, array(
        'title' => __( 'Social', 'bashar-portfolio' ),
        'id'    => 'social_field',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => __( 'Facebook', 'bashar-portfolio' ),
            ),
            array(
                'id'       => 'twitter',
                'type'     => 'text',
                'title'    => __( 'Twitter', 'bashar-portfolio' ),
            ),
            array(
                'id'       => 'linkedin',
                'type'     => 'text',
                'title'    => __( 'Linkedin', 'bashar-portfolio' ),
            ),
            array(
                'id'       => 'youtube',
                'type'     => 'text',
                'title'    => __( 'Youtube', 'bashar-portfolio' ),
            ),
        )
    ) );

    // Contact Field
    Redux::setSection( $opt_name, array(
        'title' => __( 'Contact', 'bashar-portfolio' ),
        'id'    => 'contact_field',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'location',
                'type'     => 'text',
                'title'    => __( 'Location', 'bashar-portfolio' ),
            ),
            array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => __( 'Phone', 'bashar-portfolio' ),
            ),
        )
    ) );
