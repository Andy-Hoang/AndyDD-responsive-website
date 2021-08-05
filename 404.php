<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">Oh! 404? </h2>
    <h3> Page Not Found </h2>
    <img src="http://source.unsplash.com/640x480/?cats">

    <h3>Please try the following links: </h3>

    <ul>
        <li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
        <li><a href="<?php echo site_url('/projects') ?>">Project List</a></li>
        <li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
        <li><a href="<?php echo site_url('/blog') ?>">Home Page</a></li>
    </ul>

</div>

<?php get_footer(); ?>
