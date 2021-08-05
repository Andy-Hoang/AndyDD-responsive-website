<!-- Call Header -->
<?php get_header(); ?>

        <h2 class="page-heading">Search Results for: 
            <?php echo get_search_query(); ?></h2>
       

        <?php if(have_posts()) { ?>

        <!-- fetch Blog posts to display on page -->
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
                    <!-- If post type is Post, have in... (Project dnt have Category) -->
                    <?php if(get_post_type() == 'post') { ?>
                        in <a href="#"><?php echo get_the_category_list(', ') ?></a>
                    <?php } ?>
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

        <?php  } else { ?>

            <div class="no-results">
                <h2>Coundn't find anything! Did you just mistype something?</h2>
                <h3> Want to search again? </h3>
                <h3> Or check out these links: </h3>
                <ul>
                    <li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
                    <li><a href="<?php echo site_url('/projects') ?>">Project List</a></li>
                    <li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
                    <li><a href="<?php echo site_url('/blog') ?>">Home Page</a></li>
                </ul>
            </div>

        <?php } ?>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

     

<!-- Call Footer -->
<?php get_footer(); ?>