<?php
/*
Template Name: Employees
*/
?>

<?php get_header(); /*get the header*/ ?>

<div class="body-page-employee">
    <?php $path = get_template_directory_uri(); ?>
    <div class="container-sidebar-employee">
        <?php get_sidebar('employee'); ?>
        <div class="employee-sidebar-dropdown">
            <img src="<?php echo $path; ?>/img/bx-menu.svg" alt="Menu" />
        </div>
    </div>
    <main class="container withsidebar-employee">
        <div class="main-content">
            <?php while (have_posts()) {
                the_post();/*initialise WordPress Loop*/ ?>
                <h1><?php the_title();/*Title of your page */ ?></h1>
                <?php the_post_thumbnail('blog', array('class' => 'image-class'));/*Image*/ ?>
                <p><?php /*Content of your page*/ ?></p>
            <?php } ?>
            <?php vistapizza_list_employees(10); ?>
        </div>
    </main>
</div>
<?php get_footer() /*get the footer*/ ?>