<?php
/*
Template Name: Info Pizza
*/
?>

<?php $pizza_name = get_field('pizza_name'); ?>
<?php $short_history = get_field('short_history'); ?>
<?php $price = get_field('price'); ?>
<?php $ingredients = get_field('ingredients'); ?>
<?php $image = get_field('photo'); ?>

<?php get_header(); ?>
<div class="body-page-infopizza">
  <h1><?php the_title(); ?></h1>
  <div class="pizza-price">
      <p><?php echo "PRICE: " . $price . "€" ?></p>
  </div>
  <div class="pizza-image-container">
    <?php the_post_thumbnail('blog'); ?>
  </div>

  <main class="container-nosidebar-infopizza">
    <div class="main-content-pizzainfo">
      <?php while (have_posts()) {
        the_post(); ?>
        <div class="infopizza-details">
          <div class="history-ingredients-container">
            <div class="history-info">
              <h2>History</h2>
              <p><?php echo $short_history ?></p>
            </div>
            <div class="ingredients-info">
              <h2>Ingredients</h2>
              <?php
              if ($ingredients) {
                echo '<ul>';
                foreach ($ingredients as $ingredient) {
                  echo '<li>' . esc_html($ingredient) . '</li>';
                }
                echo '</ul>';
              }
              ?>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
    
  </main>
</div>
<?php get_footer() ?>