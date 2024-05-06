<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<h1> Blog </h1>
<main class="container nosidebar">
    <ul class="list-blog">
        <?php 
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
        $blog_posts = new WP_Query($args);
        if ($blog_posts->have_posts()) :
            while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                <?php get_template_part('template-parts/blog-listing'); ?>
            <?php endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </ul>
</main>

<?php get_footer(); ?>
