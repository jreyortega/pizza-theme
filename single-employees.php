<?php
/*
Template Name: Info Employee
*/
?>

<?php get_header();?>
<main class="container-withsidebar-infoemployee">
  <div class="main-content-infoemployee">
    <?php while(have_posts()){ the_post();?>
      
      <?php $name = get_field('name'); ?>
      <?php $bibliografy = get_field('bibliografy'); ?>
      <?php $incorporation_date = get_field('incorporation_date'); ?>
      <?php $specialization = get_field('specialization'); ?>
      <?php the_post_thumbnail('square', array('class' => 'image-class-employee')); ?>
      
      <div class="employee-info-content">
        <h1><?php echo $name; ?></h1>
        <h3><?php echo $incorporation_date; ?></h3>
        <div class="bibliografy-specializations-info">
          <div class="bibliografy-info">
            <h2>Bibliografy</h2>
            <p><?php echo $bibliografy; ?></p>
          </div>
          <div class="specializations-info">
            <h2>Specializations</h2>
            <p><?php echo $specialization; ?></p>
          </div>
        </div>
      </div>
      

    <?php } ?>
  </div>
</main>
<?php get_footer()?>