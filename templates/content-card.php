<div class="card">
  <figure class='list-posts'>

      <?php if ( has_post_thumbnail() ) : ?>
                        
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('medium'); ?>
                        
            </a>
      <?php endif; ?>
       
  </figure>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text"><?php the_content() ?></p>
    <p class="card-text"><?php the_time() ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a> 
  </div>

  </div>