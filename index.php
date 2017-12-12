    <?php get_header(); ?>
    
    <section class="section-padding latest-news-card">
        <div class="container">

            <div class="row">
                <div id="blogGrid">

                <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
        
                    get_template_part( 'content', get_post_format() );
    
                endwhile; endif; 
                ?>
                    
                </div>
                <!-- /#blogGrid -->
            </div>
            <!-- /.row -->

            <!-- <ul class="pagination post-pagination text-center mt-50">
                <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-left"></i></a></li>
                <li><span class="current waves-effect waves-light">1</span></li>
                <li><a href="#." class="waves-effect waves-light">2</a></li>
                <li><a href="#." class="waves-effect waves-light"><i class="fa fa-angle-right"></i></a></li>
            </ul> -->

        </div>
        <!-- /.container -->
    </section>
    <?php get_footer();?>