

<?php get_header() ?> 
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="row">
<?php 
    if(have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            
            <?php get_template_part('templates/content','index'); ?>
            
            <?php
        endwhile;
            get_template_part('templates/content','paginacion');
    else:
        get_template_part('templates/content','none');
    endif;           
    ?>
</div>
</div>

<div class="col-4">
<?php get_sidebar( 'right' ); ?>
</div>
</div>
</div>
<?php get_footer() ?>
      

