<div class="posts-content single-post">

    <article class="post-wrapper">

        <header class="entry-header-wrapper clearfix">
            <div class="entry-header">
                <h2 class="entry-title"><?php the_title(); ?></h2>

                <div class="entry-meta">
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-user"></i>
                            <a href="#"><?php the_author(); ?></a>
                        </li>

                        <li>
                            <i class="fa fa-clock-o"></i>
                            <a href="#"><?php the_date(); ?></a>
                        </li>
                    </ul>
                </div>
                <!-- .entry-meta -->
            </div>

        </header>
        <!-- /.entry-header-wrapper -->

        <div class="thumb-wrapper">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <img class="activator" src="<?php echo $image[0]; ?>" alt="image">
        <?php endif; ?>
        </div>
        <!-- .post-thumb -->


        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <!-- .entry-content -->


        <!-- <footer class="entry-footer">
            <div class="post-tags">
                <span class="tags-links">
                    <i class="fa fa-tags"></i>
                    <a href="#">Technology,</a>
                    <a href="#" rel="tag">material design</a>
                </span>
            </div> -->
            <!-- .post-tags -->

            <!-- <ul class="list-inline right share-post">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                        <span>Share</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                        <span>Tweet</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                        <span>Plus</span>
                    </a>
                </li>
            </ul>
        </footer> -->

    </article>
    <!-- /.post-wrapper -->

    <!-- <nav class="single-post-navigation" role="navigation">
        <div class="row"> -->
            <!-- Previous Post -->
            <!-- <div class="col-xs-6">
                <div class="previous-post-link">
                    <a class="waves-effect waves-light" href="#">
                        <i class="fa fa-long-arrow-left"></i>Read Previous Post</a>
                </div>
            </div> -->

            <!-- Next Post -->
            <!-- <div class="col-xs-6">
                <div class="next-post-link">
                    <a class="waves-effect waves-light" href="#">Read Next Post
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div> -->
        <!-- .row -->
    <!-- </nav> -->


</div>
<!-- /.posts-content -->