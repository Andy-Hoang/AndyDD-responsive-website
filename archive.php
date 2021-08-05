<!-- to show all posts that have same Category -->


<!-- Call Header -->
<?php get_header(); ?>


        <!-- show the title of the chosen Category -->
        <h2 class="page-heading"><?php the_archive_title(); ?></h2>
       

        <!-- *** fetch Blog posts to display on page ***-->
        <section>
    
            <?php
                
                while (have_posts()) {
                    the_post();  
            ?>

            <div class="card">
                <div class="card-image">
                    <!-- automatically put the correct link coressponding to each post -->
                    <a href="<?php the_permalink(); ?>">
                        <!-- automatically put the correct img coressponding to each post -->
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                        alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <!-- automatically return the right title -->
                        <h3><?php the_title(); ?></h3>
                    </a>

                <div class="card-meta">
                    Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?>
                </div>    

                    <p>
                        <!-- automatically return the right excerpt, limit to show 30 words -->
                        <!-- get_the_excerpt(): return the excerpt() - the_excerpt: print to characters -->
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
            
            <!-- good practice to reset query whenever custom query used -->
            <!-- notice how the } of While ends here -->
            <?php }
                wp_reset_query(); ?>

        </section>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

     

<!-- Call Footer -->
<?php get_footer(); ?>