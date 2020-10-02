<div class="paginacion">
        <?php if(get_next_posts_link()): ?>
            <button type="button" class="btn btn-outline-warning">
            <?php echo get_next_posts_link(); ?></button>
        <?php endif; ?>

        <?php if(get_previous_posts_link()): ?>
            <button type="button" class="btn btn-outline-warning">
            <?php echo get_previous_posts_link(); ?></button>
        <?php endif; ?>

        </div>