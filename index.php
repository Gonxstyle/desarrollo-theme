

<?php get_header() ?> 

<?php 
    if(have_posts()) :
        while (have_posts()) :
            the_post();
            
            get_template_part('templates/content','index');
        endwhile;
            get_template_part('templates/content','paginacion');
    else:
        get_template_part('templates/content','none');
    endif;           
    ?>



<?php get_sidebar() ?>
<?php get_footer() ?>
    

