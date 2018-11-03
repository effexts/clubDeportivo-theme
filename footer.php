<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Club Deportivo UTA
 */
?>
<?php
$hidefooter = get_theme_mod('hide_footer', 1);
$hidecontact = get_theme_mod('hide_contact', 1);
?>
<div id="footer-wrapper">
		<?php if($hidefooter == ''){?>
    	<div class="container footer">
             <div class="cols-3 widget-column-1">  
             
              <?php if ( get_theme_mod('about_title') !== "") { ?>
                <h5><?php esc_html_e( get_theme_mod( 'about_title', esc_html__('Acerca de nosotros','club-deportivo'))); ?></h5>             
			   <?php } ?>
               
                <?php if ( get_theme_mod('about_description') !== "") { ?>
                <p><?php echo html_entity_decode(esc_attr( get_theme_mod( 'about_description', __('El Club Deportivo tiene como caracteristica principal beneficiar a toda la comunidad universitaria y local, con las condiciones necesarias para el desarrollo a nivel deportivo local, regional, nacional e internacional, mediante planes y programas adecuados a las necesidades, utilizando el tiempo libre, mitigando la fatiga intelectual, sedentarismo y las necesidades de recreacion','club-deportivo')))); ?></p>
			   <?php } ?>                   
         
            </div><!--end .widget-column-1-->                  
			    
                      
               <div class="cols-3 widget-column-2">  
               
                <?php if ( get_theme_mod('newsfeed_title') !== "") { ?>
                <h5><?php esc_html_e( get_theme_mod( 'newsfeed_title', __('Últimas Noticias','club-deportivo'))); ?></h5>            
			  <?php } ?>  
              
              <?php $args = array( 'posts_per_page' => 2, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
					$postquery = new WP_Query( $args );
					?>
                    <?php while( $postquery->have_posts() ) : $postquery->the_post(); ?>
                        <div class="recent-post">
                            <div class="footerthumb"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a></div>                           	
                            <p><?php the_excerpt(); ?></p> 
                            <a class="morebtn" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_attr_e('Leer más..','club-deportivo'); ?></a>                                              
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>                    
				
              </div><!--end .widget-column-3-->
                
             <div class="cols-3 widget-column-3">  
               <?php if($hidecontact == ''){?>              
               <?php if ( get_theme_mod( 'contact_title' ) !== "" ){  ?>
                <h5><?php echo esc_html_e( get_theme_mod( 'contact_title', __('Información de contacto','club-deportivo'))); ?></h5>              
			   <?php } ?>
                             
               <?php if ( get_theme_mod('contact_add') !== "") { ?>
                <div class="siteaddress">
                   <?php echo __( get_theme_mod( 'contact_add', __('Club Deportivo Universidad de Tarapaca<br> 18 de Septiembre 2222<br>
                   Complejo Deportivo Integral, Oficina 1, Segundo Piso.','club-deportivo'))); ?>
                </div>             
			   <?php } ?> 
               
             <div class="phone-no">	  
               <?php if ( get_theme_mod('contact_no') !== "") { ?>
               <p><span><?php esc_html_e('Teléfono:', 'club-deportivo');?></span> <?php echo esc_attr_e( get_theme_mod( 'contact_no', __('+56-58-2205045','club-deportivo'))); ?></p>             
			   <?php } ?>  
               
               <?php if( get_theme_mod('contact_mail') !== ""){ ?>
               <p><span><?php esc_html_e('Email:', 'club-deportivo');?></span>
               <a href="mailto:<?php echo sanitize_email(get_theme_mod('contact_mail','deportes@uta.cl')); ?>"><?php echo get_theme_mod('contact_mail','deportes@uta.cl'); ?></a>	</p>		
			  <?php } ?> 
              
               
              <?php if ( get_theme_mod( 'website_link' ) !== "" ){  ?>
               <p><span><?php esc_html_e('Página web:', 'club-deportivo');?></span>
               <a href="<?php echo home_url('/'); ?>"><?php echo home_url('/'); ?></a></p>              
			   <?php } ?>           
                        
              
          </div>
           <?php } ?> 
          </div><!--end .widget-column-4-->
                
                
            <div class="clear"></div>
        </div><!--end .container--> 
        <?php } ?>               
    </div><!--end .footer-wrapper-->
<?php wp_footer(); ?>

</body>
</html>