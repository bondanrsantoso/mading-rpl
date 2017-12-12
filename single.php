<?php get_header(); ?>
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row haha">
                <div class="col-md-12">
                <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
        
                    get_template_part( 'content-single', get_post_format() );
    
                endwhile; endif; 
                ?>
                </div>
                <!-- /.col-md-12 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <?php get_footer();?>