<!DOCTYPE HTML>
<html>
<head>
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
 <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="main">
    <div id="header">
      <div id="logo" style=" background: url(<?php header_image(); ?>) no-repeat 0 0 / 100% 100% ;">
        <div id="logo_text">
        <h1><div class="title"><?php bloginfo('name'); ?> </div></h1>
          <h2><div class="subtext"><?php bloginfo('description'); ?> </div></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
         <?php wp_nav_menu(array(
               'theme_location' => 'primarymenu'
         )); 
         ?>
        </ul>
      </div>
      <ul id="menu">
        <?php wp_nav_menu(array(
               'theme_location' => 'footermenu'
         )); 
         ?>
        </ul>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
           <input class="search" type="text" name="search_field" value="Enter keywords....." />
          </p>
        </form>
      </div>
      <div id="content">

<?php while(have_posts()) : the_post(); ?>
        <h1><a href="#"> <?php the_title();?> </a></h1>
        <p>
          <?php the_content(); ?>
       </p>
<?php endwhile ;?>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
