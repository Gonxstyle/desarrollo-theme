<?php get_header() ?>
    
<?php 
    if(have_posts()) :
        while (have_post()) :
            the_post();
            get_template_part('templates/content','single');
        endwhile;
            get_template_part('templates/content','paginacion');
    else:
        get_template_part('templates/content','none');
    endif;           
    ?>
    
  
<?php get_sidebar() ?>
<?php get_footer() ?>