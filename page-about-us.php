<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); /*get the header*/?>

<div class="body-page-about-us">
    <main class="container-about-us">
        <div class="main-content">
            <?php while(have_posts()){ the_post();/*initialise WordPress Loop*/?>
            <h1><?php the_title();/*Title of your page */?></h1>
            <?php the_post_thumbnail('blog', array('class' => 'image-class'));/*Image*/?>
            <p><?php the_content();/*Content of your page*/?></p>
            <?php } ?>
        </div>
    </main>
</div>
<?php get_footer() /*get the footer*/?>