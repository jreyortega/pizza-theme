<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="body-page-blog">
    <div class="blog-content">
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
        </div>
    <?php $path = get_template_directory_uri(); ?>
    <div class="container-sidebar-blog">
        <div class="blog-sidebar-dropdown"> 
            <img src="<?php echo $path; ?>/img/bx-menu.svg" alt="Menu" />
        </div>
        <?php get_sidebar('recententries');?>
    </div>
</div>
<?php get_footer(); ?>
