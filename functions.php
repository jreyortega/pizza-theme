<?php
function vistapizza_menus()
{
    register_nav_menus(array(
        // id => __('Name of your menu', 'text domain of your theme')
        'header-menu' => __('Header Menu', 'vistapizza'),
        'footer-menu' => __('Footer Menu', 'vistapizza')
    ));
}
// Hook: it indicates that this function must be activated when WordPress is initialized
add_action('init', 'vistapizza_menus');

// Scripts and Styles
function vistapizza_scripts_styles()
{
    // Enqueue Google Fonts
    wp_enqueue_style('googleFontOswald', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap', array(), '1.0.0');
    wp_enqueue_style('googleFontPermanentMarker', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap', array(), '1.0.0');
    wp_enqueue_style('googleFontMontserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), '1.0.0');

    // Enqueue Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Enqueue Style CSS
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFontOswald', 'googleFontMontserrat', 'googleFontPermanentMarker'), '1.0.0');

    // Enqueue Scripts JS
    wp_enqueue_script('sidebar', get_template_directory_uri() . '/js/sidebar.js', array('jquery'), '1.0.0');

    // Check if the current page is the gallery page and enqueue Lightbox CSS and JS
    if (is_page('gallery')) {
        // Enqueue Lightbox CSS
        wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
        // Enqueue Lightbox JS with jQuery as dependency
        wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0');
    }

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'vistapizza_scripts_styles');

// Add thumbnail support
function vistapizza_setup()
{
    add_theme_support('post-thumbnails');
    //Titles SEO
    add_theme_support('title-tag');
    //New sizes
    add_image_size('square', '350', '350', true);
    add_image_size('portrait', '350', '724', true);
    add_image_size('boxes', '375', '375', true);
    add_image_size('med', '700', '400', true);
    add_image_size('blog', '966', '644', true);
}
// Hook: it indicates that this function must be activated when WordPress is initialized
add_action('after_setup_theme', 'vistapizza_setup');
?>

<?php
function vistapizza_list_pizzas($n)
{
    $args = array(
        'post_type' => 'pizzas',
        'posts_per_page' => $n
    );
    $pizzas = new WP_Query($args);
?>
    <ul class="list-pizzas">
        <?php while ($pizzas->have_posts()) {
            $pizzas->the_post(); ?>
            <li class='card'>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('square'); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div class="content">
                        <?php $name = get_field('pizza_name'); ?>
                        <h3><?php echo $name; ?></h3>
                        <?php $price = get_field('price'); ?>
                        <p><?php echo $price . "€"; ?> </p>
                    </div>
                </a>
            </li>
        <?php }
        wp_reset_postdata(); ?>
    </ul>
<?php } ?>

<?php
function vistapizza_list_employees($n)
{
    $args = array(
        'post_type' => 'employees',
        'posts_per_page' => $n
    );
    $employees = new WP_Query($args);
    $counter = 0; //Contador para alternar el diseño
?>
    <ul class="list-employees">
        <?php while ($employees->have_posts()) {
            $employees->the_post();

            $counter++;
            $is_odd = $counter % 2 !== 0;
        ?>
            <li class="card-employee <?php echo $is_odd ? 'odd' : 'even'; ?>">
                <?php if ($is_odd) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="employee-thumbnail">
                            <?php the_post_thumbnail('square'); ?>
                        </div>
                    </a>

                    <div class="content">
                        <?php $name = get_field('name'); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo $name; ?></h3>
                        </a>
                        <?php $bibliografy = get_field('bibliografy') ?>
                        <p><?php echo $bibliografy; ?></p>
                    </div>

                <?php } else { ?>

                    <div class="content">
                        <?php $name = get_field('name'); ?>
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php echo $name; ?></h3>
                        </a>
                        <?php $bibliografy = get_field('bibliografy') ?>
                        <p><?php echo $bibliografy; ?></p>
                    </div>

                    <a href="<?php the_permalink(); ?>">
                        <div class="employee-thumbnail">
                            <?php the_post_thumbnail('square'); ?>
                        </div>
                    </a>
                <?php } ?>
            </li>
        <?php }
        wp_reset_postdata(); ?>
    </ul>
<?php } ?>

<?php
function vistapizza_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar 3',
        'id' => 'sidebar_3',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'vistapizza_widgets');
?>

<?php
    function vistapizza_main_image(){
        //obtain page id
        $front_page_id = get_option('page_on_front');
        //obtain image id
        $id_image = get_field('image_heading',$front_page_id);
        //obtain the image
        $image = wp_get_attachment_image_src( $id_image,'full')[0];
        //CSS
        wp_register_style('custom',false) ;
        wp_enqueue_style( 'custom' );
        $image_css = "
            body.home .site-header {
                background-image: linear-gradient(to right,rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url($image);
            }
        " ;
        wp_add_inline_style( 'custom', $image_css );
    }
    add_action('init' , 'vistapizza_main_image');
?>