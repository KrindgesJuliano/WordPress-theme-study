<?php get_header(); ?>

<!-- Content
    ============================================= -->
<section id="content">

  <div class="content-wrap">


    <div class="container clearfix">

      <!-- Post Content
          ============================================= -->
      <div class="postcontent nobottommargin clearfix">

        <?php

        if (have_posts()) {
          while (have_posts()) {
            the_post();

            global $post;
            $author_ID        =  $post->post_author;
            $author_URL       =  get_author_posts_url($author_ID);

            ?>
            <div class="single-post nobottommargin">

              <!-- Single Post
    ============================================= -->


              <!-- Entry Title
        ============================================= -->
              <div class="entry-title">
                <h2><?php the_title(); ?></h2>
              </div><!-- .entry-title end -->


              <!-- Entry Content
        ============================================= -->
              <div class="entry-content notopmargin">
                <a href="<?php echo $post->guid; ?>">Direct Download</a>
                <?php


                    the_content();

                    ?>
                <!-- Post Single - Content End -->


              </div><!-- .entry end -->

              <!-- Comments
    ============================================= -->
              <div id="comments" class="clearfix">

                <?php
                    if (comments_open() || get_comments_number()) {
                      comments_template();
                    }
                    ?>
            <?php
              }
            }
            ?>

              </div><!-- .postcontent end -->

            </div>
            <?php get_sidebar(); ?>
      </div>

</section><!-- #content end -->

<?php get_footer(); ?>