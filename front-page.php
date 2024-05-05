<?php
/*
Template Name: Front Page
*/
?>
<?php get_header('front');?>

<section class="welcome container">
    <h2><?php the_field('title_welcome'); ?></h2>
    <p><?php the_field('content_welcome'); ?></p>
</section>

<section class="main-games">
    <div class="container">
        <h2>Our pizzas</h2>
        <?php vistapizza_list_pizzas(6); ?>
        <div class="button-container">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Pizzas'))); ?>" class="button">See All</a>
        </div>
    </div>
</section>

<section class="sellers">
    <div class="container">
        <h2>Our staff</h2>
        <?php vistapizza_list_employees(2); ?>
    </div>
</section>


<section class="countdown">
    <p id="date-countdown">
        <?php the_field('date_countdown'); ?>
    </p>
    <div class="container">
        <h2>Next conference</h2>
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