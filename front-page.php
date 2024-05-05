<?php
/*
Template Name: Front Page
*/
?>
<?php get_header('front'); ?>

<section class="welcome container">
    <h1><?php the_field('title_welcome'); ?></h1>
    <p><?php the_field('content_welcome'); ?></p>
</section>

<section class="main-games">
    <div class="container">
        <h1>Our pizzas</h1>
        <?php vistapizza_list_pizzas(6); ?>
        <div class="see-all-container">
            <div class="header-shopping-cart">
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
        <div class="header-shopping-cart">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Employees'))); ?>">
                <p>See all</p>
            </a>
        </div>
    </div>
</section>


<section class="countdown">
    <p id="date-countdown">
        <?php the_field('date_countdown'); ?>
    </p>
    <div class="container">
        <h1>Next conference</h1>
        <div class="countdown-numbers">
            <div class="days">
                <p class="number" id="days"></p>
                <p class="countdown-tag">days</p>
            </div>
            <div class="hours">
                <p class="number" id="hours"></p>
                <p class="countdown-tag">hours</p>
            </div>
            <div class="minutes">
                <p class="number" id="minutes"></p>
                <p class="countdown-tag">minutes</p>
            </div>
            <div class="seconds">
                <p class="number" id="seconds"></p>
                <p class="countdown-tag">seconds</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>