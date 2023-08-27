<div class="col-sm-12 post-item mb-3" style="height: 80px !important;">
    <a href="<?php the_permalink(); ?>">
        <h6 class="mt-3 post-title"><?php the_title(); ?></h6>
    </a>
    <div class="row">
        <div class="col-8 post-category">
            <?php the_category(' '); ?>
        </div>
        <div class="col-4 text-end">
            <span class="post-time"><?php the_time('F j, Y'); ?></span>
        </div>
    </div>
</div>