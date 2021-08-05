<!-- to format the Page: such as About, Contact -->


<?php get_header(); 

// fetch data to display
while(have_posts()) {
    the_post();

?>


    <h2 class="page-heading"><?php the_title(); ?></h2>

    <div id="post-container">
      <section id="blogpost">
        <div class="card">
        <!-- Assume general page, some have/ dont have image. So neef IF-->
          <?php if(has_post_thumbnail()) { ?>

          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
             alt="Card Image">
          </div>

          <?php } ?>

          <div class="card-description">
            <?php the_content(); ?>
          </div>
        </div>
      </section>

<?php
    }
?>

      <aside id="sidebar">
        <!-- id='main_sidebar' set in functions.php, ad_widgets(); -->
        <h3><?php dynamic_sidebar('main_sidebar'); ?></h3>
      </aside>
    </div>



<?php get_footer(); ?>
