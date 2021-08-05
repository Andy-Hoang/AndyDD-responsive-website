<!-- this is Front Page/ Home Page -->

<!-- Call Header -->
<?php get_header(); ?>

    <div id="banner">
        <h1>&lt;AndyDD/&gt;</h1>
        <h3>My Journey for Growth</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">Blog Posts</h2>
        </a>

        <!-- *** fetch Blog posts to display on page ***-->
        <section>
    
            <?php
                $args = array(
                    'post_type' => 'post',
                    // notice postS_ (not post_)
                    'posts_per_page' => 2
                );

                $blogposts = new WP_Query($args);

                while ($blogposts -> have_posts()) {
                    $blogposts -> the_post();  
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

        <section>
            <a href="<?php echo site_url('/blog'); ?>">
                <h3 class="more-heading"> >>> More on Blog <<< </h3>
            </a>
        </section>

        <a href="<?php echo site_url('/projects'); ?>">
            <h2 class="section-heading">All Projects</h2>
        </a>
    	
        
        <!-- *** fetch Project posts to display on page ***-->
        <section>
            
            <?php
                $args = array(
                    'post_type' => 'project',
                    // notice postS_ (not post_)
                    'posts_per_page' => 2
                );

                $projects = new WP_Query($args);

                while ($projects -> have_posts()) {
                    $projects -> the_post();  
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


        <section>
            <a href="<?php echo site_url('/projects'); ?>">
                <h3 class="more-heading"> >>> More on Projects <<< </h3>
            </a>
        </section>


        <a href="<?php echo site_url('#'); ?>">
            <h2 class="section-heading">Source Code</h2>
        </a>
        
        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis perferendis praesentium
                consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel corrupti!
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

<!-- Call Footer -->
<?php get_footer(); ?>