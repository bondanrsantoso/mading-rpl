<div class="col-xs-12 col-sm-6 col-md-6 blog-grid-item mb-30">
    <article class="card medium">
        <div class="card-image waves-effect waves-block waves-light">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <img class="activator" src="<?php echo $image[0]; ?>" alt="image">
        <?php else:?>
            <img class="activator" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/background3.jpg" alt="image">
        <?php endif; ?>
        </div>
        <div class="card-content">
            <h2 class="entry-title activator"><?php the_title(); ?></h2>
        </div>
        <div class="card-reveal overlay-blue">
            <span class="card-title close-button">
                <i class="fa fa-times"></i>
            </span>
            <a class="posted-on" href="#"><?php the_author(); ?></a>
            <h2 class="entry-title">
                <a href="#"><?php the_title(); ?></a>
            </h2>
            <p><?php the_excerpt(); ?></p>
            <a class="readmore" href="<?php the_permalink();?>">Read Full Post
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>

    </article>
    <!-- /.card -->
</div>