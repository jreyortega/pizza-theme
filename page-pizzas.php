<?php
/*
Template Name: Pizzas
*/
?>

<?php get_header(); /*get the header*/?>

<div class="body-page-pizza">
    <?php $path = get_template_directory_uri(); ?>
    <div class="container-sidebar-pizza">
        <?php get_sidebar( ); ?>
        <div class="pizza-sidebar-dropdown"> 
            <img src="<?php echo $path; ?>/img/bx-menu.svg" alt="Menu" />
        </div>
    </div>
    <main class="container withsidebar-pizza">
        <div class="main-content">
            <?php while(have_posts()){ the_post();/*initialise WordPress Loop*/?>
            <h1><?php the_title();/*Title of your page */?></h1>
            <?php the_post_thumbnail('blog', array('class' => 'image-class'));/*Image*/?>
            <div class="pizza-list-content"><?php the_content();/*Content of your page*/?></div>
            <?php } ?>
            <?php vistapizza_list_pizzas(10); ?>
        </div>
    </main>
</div>
<?php get_footer() /*get the footer*/?>