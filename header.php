<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php wp_head(); ?>
  <title></title>
</head>

<body>
  <header class="site-header">
    <div class="header-info">
      <div class="header-logo">
        <a href="<?php echo site_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo image">
      </div>
      <div class=header-logo-name>
        <p>Vista Pizza</p>
      </div>
      <div class="header-shopping-cart">
        <a href="<?php echo site_url('/'); ?>">
          <p>Shopping cart</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/shopping-cart.png" alt="logo image">
        </a>
      </div>
    </div>
    <div class="menu-container">
      <div class="go-back-button"> 
        <button class="go-back-button" onclick="goBack()">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bx-left-arrow-alt.svg" alt="logo image">
          <p>GO BACK</p>
        </button>
        <script>
          function goBack() {
            window.history.back();
          }
        </script>
      </div>
    </div>
  </header>
</body>