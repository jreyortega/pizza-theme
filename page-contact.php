<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); /*get the header*/ ?>

<div class="body-page-contact">
    <main class="container withsidebar-contact">
        <div class="main-contact-form">
            <?php while (have_posts()) {
                the_post();/*initialise WordPress Loop*/ ?>
                <h1><?php the_title();/*Title of your page */ ?></h1>
                <div class="content">   
                    <p><?php the_content(); ?></p>
                </div> 
            <?php } ?>
        </div>
    </main>
</div>
<?php get_footer() /*get the footer*/ ?>