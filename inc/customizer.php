<?php
/**
 * SKT Strong Theme Customizer
 *
 * @package SKT Strong
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function skt_strong_customize_register( $wp_customize ) {
	
	//Add a class for titles
    class skt_strong_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('display_header_text');	
		
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#678FCA',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Esquema de colores','skt-strong'),			
			'description'	=> __('Aquí se pueden cambiar los colores del tema','skt-strong'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => __('Ajustes de Slider', 'skt-strong'),
            'priority' => null,
            'description'	=> __('La Imagen destacada debe ser ( 1400x431 )','skt-strong'),		
        )
    );
	
	$wp_customize->add_setting('page-setting1',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 1:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting2',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 2:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting3',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 3:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting4',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting4',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 4:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting5',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting5',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 5:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting6',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting6',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 6:','skt-strong'),
			'section'	=> 'slider_section'
	));		
	$wp_customize->add_setting('page-setting7',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 7:','skt-strong'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 8:','skt-strong'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'sanitize_callback'	=> 'skt_strong_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Seleccione página para slide 9:','skt-strong'),
			'section'	=> 'slider_section'
	));	
	
	//Slider hide
	$wp_customize->add_setting('hide_slides',array(
			'sanitize_callback' => 'skt_strong_sanitize_checkbox',
			'default' => false,
	));	 

	$wp_customize->add_control( 'hide_slides', array(
    	   'section'   => 'slider_section',    	 
		   'label'	=> __('Destildar para mostrar esta sección','skt-strong'),
    	   'type'      => 'checkbox'
     )); // Slider Section	
	 
	
	// Home Three Boxes Section 	
	$wp_customize->add_section('section_second', array(
		'title'	=> __('Sección de 3 cajas, página principal','skt-strong'),
		'description'	=> __('Seleccione las páginas del selector para la sección de 3 cajas','skt-strong'),
		'priority'	=> null
	));	
	
	
	$wp_customize->add_setting('page-column1',	array(
			'sanitize_callback' => 'skt_strong_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column1',array('type' => 'dropdown-pages',
			'section' => 'section_second',
	));	
	
	
	$wp_customize->add_setting('page-column2',	array(
			'sanitize_callback' => 'skt_strong_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column2',array('type' => 'dropdown-pages',
			'section' => 'section_second',
	));
	
	$wp_customize->add_setting('page-column3',	array(
			'sanitize_callback' => 'skt_strong_sanitize_integer',
		));
 
	$wp_customize->add_control(	'page-column3',array('type' => 'dropdown-pages',
			'section' => 'section_second',
	));//end three column part	
	
	
	//Hide Page Boxes Column Section
	$wp_customize->add_setting('hide_pagethreeboxes',array(
			'sanitize_callback' => 'skt_strong_sanitize_checkbox',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_pagethreeboxes', array(
    	   'section'   => 'section_second',    	 
		   'label'	=> __('Destildar para mostrar esta opción','skt-strong'),
    	   'type'      => 'checkbox'
     )); // Hide Page Boxes Column Section
	
	$wp_customize->add_section('social_sec',array(
			'title'	=> __('Ajustes sociales','skt-strong'),				
			'description'	=> __('Aquí se pueden configurar las opciones de redes sociales','skt-strong'),		
			'priority'		=> null
	));
	
	
	$wp_customize->add_setting('fb_link',array(
			'default'	=> '#facebook',
			'sanitize_callback'	=> 'esc_url_raw'	
	));
	
	$wp_customize->add_control('fb_link',array(
			'label'	=> __('Agrega enlace de Facebook','skt-strong'),
			'section'	=> 'social_sec',
			'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twitt_link',array(
			'default'	=> '#twitter',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('twitt_link',array(
			'label'	=> __('Agrega enlace de Twitter','skt-strong'),
			'section'	=> 'social_sec',
			'setting'	=> 'twitt_link'
	));
	$wp_customize->add_setting('gplus_link',array(
			'default'	=> '#gplus',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
			'label'	=> __('Agrega enlace de Google Plus','skt-strong'),
			'section'	=> 'social_sec',
			'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('linked_link',array(
			'default'	=> '#linkedin',
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linked_link',array(
			'label'	=> __('Agrega enlace de LinkedIn','skt-strong'),
			'section'	=> 'social_sec',
			'setting'	=> 'linked_link'
	));
	
	$wp_customize->add_setting('hide_social',array(
			'sanitize_callback' => 'skt_strong_sanitize_checkbox',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_social', array(
    	   'section'   => 'social_sec',    	 
		   'label'	=> __('Destildar para mostrar esta sección','skt-strong'),
    	   'type'      => 'checkbox'
     ));	
	
	$wp_customize->add_section('footer_area',array(
			'title'	=> __('Área Pie de Página','skt-strong'),
			'priority'	=> null,
	));
	$wp_customize->add_setting('skt_strong_options[credit-info]', array(
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new skt_strong_Info( $wp_customize, 'cred_section', array(
        'section' => 'footer_area',
        'settings' => 'skt_strong_options[credit-info]'
        ) )
    );
	
	$wp_customize->add_setting('newsfeed_title',array(
			'default'	=> __('Últimas noticias','skt-strong'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('newsfeed_title',array(
			'label'	=> __('Agregar el títutlo para la sección de últimas noticias','skt-strong'),
			'section'	=> 'footer_area',
			'setting'	=> 'newsfeed_title'
	));	
	
	$wp_customize->add_setting('about_title',array(
			'default'	=> __('Acerca de Nosotros','skt-strong'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('about_title',array(
			'label'	=> __('Agrega un título para la sección "Acerca de nosotros"','skt-strong'),
			'section'	=> 'footer_area',
			'setting'	=> 'about_title'
	));	
		
	$wp_customize->add_setting( 'about_description', array(
			'default'	=> __('El Club Deportivo tiene como caracteristica principal beneficiar a toda la comunidad universitaria y local, con las condiciones necesarias para el desarrollo a nivel deportivo local, regional, nacional e internacional, mediante planes y programas adecuados a las necesidades, utilizando el tiempo libre, mitigando la fatiga intelectual, sedentarismo y las necesidades de recreacion.','skt-strong'),				
			'sanitize_callback' => 'esc_textarea',
	) );

	$wp_customize->add_control( 'about_description', array(
			'type' => 'textarea',
			'label' => __( 'Descripción "Acerca de Nosotros"', 'skt-strong' ),   
			'section' => 'footer_area',   
			'setting'	=> 'about_description',
	) );
	
	$wp_customize->add_setting('contact_title',array(
			'default'	=> __('Información de Contacto','skt-strong'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('contact_title',array(
			'label'	=> __('Agrega un título para la sección "Información de Contacto"','skt-strong'),
			'section'	=> 'footer_area',
			'setting'	=> 'contact_title'
	));
	
	$wp_customize->add_setting('hide_footer',array(
			'sanitize_callback' => 'skt_strong_sanitize_checkbox',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_footer', array(
    	   'section'   => 'footer_area',    	 
		   'label'	=> __('Destildar para mostrar está sección','skt-strong'),
    	   'type'      => 'checkbox'
     ));	
	
	$wp_customize->add_section('contact_sec',array(
			'title'	=> __('Detalles de Contacto','skt-strong'),
			'description'	=> __('Añade los detalles de contacto','skt-strong'),
			'priority'	=> null
	));	
	
	$wp_customize->add_setting('contact_add',array(
			'default'	=> __('Club Deportivo Universidad de Tarapaca, 18 de Septiembre 2222, Complejo Deportivo Integral, Oficina 1, Segundo Piso.','skt-strong'),
			'sanitize_callback'	=> 'esc_textarea',
	));
	
	$wp_customize->add_control(	'contact_add', array(
				'type' => 'textarea',
				'label'	=> __('Añade la dirección de contacto aquí','skt-strong'),
				'section'	=> 'contact_sec',
				'setting'	=> 'contact_add'
	));
	$wp_customize->add_setting('contact_no',array(
			'default'	=> __('+56-58-2205045','skt-strong'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('contact_no',array(
			'label'	=> __('Agrega número de contacto','skt-strong'),
			'section'	=> 'contact_sec',
			'setting'	=> 'contact_no'
	));
	$wp_customize->add_setting('contact_mail',array(
			'default'	=> 'deportes@uta.cl',
			'sanitize_callback'	=> 'sanitize_email'
	));
	
	$wp_customize->add_control('contact_mail',array(
			'label'	=> __('Agrega tu correo electrónico aquí','skt-strong'),
			'section'	=> 'contact_sec',
			'setting'	=> 'contact_mail'
	));
	
	$wp_customize->add_setting('hide_contact',array(
			'sanitize_callback' => 'skt_strong_sanitize_checkbox',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_contact', array(
    	   'section'   => 'contact_sec',    	 
		   'label'	=> __('Destildar para mostrar ésta opción','skt-strong'),
    	   'type'      => 'checkbox'
     ));	
	
	 
    $wp_customize->add_setting('skt_strong_options[layout-info]', array(
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new skt_strong_Info( $wp_customize, 'layout_section', array(
        'section' => 'theme_layout_sec',
        'settings' => 'skt_strong_options[layout-info]',
        'priority' => null
        ) )
    );
	
	
	  
    $wp_customize->add_setting('skt_strong_options[font-info]', array(
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new skt_strong_Info( $wp_customize, 'font_section', array(
        'section' => 'theme_font_sec',
        'settings' => 'skt_strong_options[font-info]',
        'priority' => null
        ) )
    );	
	  
    $wp_customize->add_setting('skt_strong_options[info]', array(
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new skt_strong_Info( $wp_customize, 'doc_section', array(
        'section' => 'theme_doc_sec',
        'settings' => 'skt_strong_options[info]',
        'priority' => 10
        ) )
    );		
}
add_action( 'customize_register', 'skt_strong_customize_register' );

//Integer
function skt_strong_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function skt_strong_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function skt_strong_custom_css(){
		?>
        	<style type="text/css"> 
					
					a, .blog_lists h2 a:hover,
					#sidebar ul li a:hover,
					.threebox:hover h3,
					.cols-3 ul li a:hover, .cols-3 ul li.current_page_item a,					
					.phone-no strong,					
					.left a:hover,
					.blog_lists h4 a:hover,
					.recent-post h6 a:hover,
					.postmeta a:hover,
					.recent-post .morebtn
					{ color:<?php echo esc_attr(get_theme_mod('color_scheme','#678FCA')); ?>;}
					 
					
					.pagination .nav-links span.current, .pagination .nav-links a:hover,
					#commentform input#submit:hover,
					.slide_info .slide_more:hover,							
					.nivo-controlNav a.active,				
					h3.widget-title,	
					.nivo-directionNav a:hover,			
					.wpcf7 input[type='submit'],					
					.social-icons a:hover,
					a.ReadMore:hover,
					.threebox.box1 a.ReadMore:hover,
					input.search-submit,
					.sitenav ul li a:hover, .sitenav ul li.current_page_item a, .sitenav ul li.menu-item-has-children.hover, .sitenav ul li.current-menu-parent a.parent,
					.sitenav ul li ul,
					.header-social-icons a:hover,
					.threebox.box2
					{ background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#678FCA')); ?> !important;}					
					

					h2.section-title::after,
					h2.section-title
					{ border-color:<?php echo esc_attr(get_theme_mod('color_scheme','#678FCA')); ?>;}
					
			</style> 
<?php          
} 
         
add_action('wp_head','skt_strong_custom_css');	

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function skt_strong_customize_preview_js() {
	wp_enqueue_script( 'skt_strong_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20180508', true );
}
add_action( 'customize_preview_init', 'skt_strong_customize_preview_js' );