<?php
/*
Template Name: Front Page
*/
?>
<?php get_header('front'); ?>

<div class="body-page-main">
    <section class="welcome container">
        <h1><?php the_field('title_welcome'); ?></h1>
        <p><?php the_field('content_welcome'); ?></p>
    </section>

    <section class="main-games">
        <div class="container">
            <h1>Our pizzas</h1>
            <?php vistapizza_list_pizzas(6); ?>
            <div class="see-all-container">
                <div class="see-all-pizzas">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Pizzas'))); ?>">
                        <p>See all</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="sellers">
        <div class="container">
            <h1>Our staff</h1>
            <?php vistapizza_list_employees(2); ?>
            <div class="see-all-container">
                <div class="see-all-employees">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Employees'))); ?>">
                        <p>See all</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>