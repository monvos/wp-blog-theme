<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
  <title><?php bloginfo('name'); if(wp_title('', false)) { echo ' - '; } else { echo ' - web developer'; } wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>
<body class="bg-main-bg">
  <div class="flex items-center fixed top-0 w-full h-[75px] z-50 justify-between px-5 bg-main-bg">
    <div>
      <h1 class="text-main-text uppercase text-xl xl:text-3xl font-main"><a href="<?php echo get_home_url(); ?>"><?php echo bloginfo('name') ?></a></h1>
    </div>
    <div>
      <div class="text-white block xl:hidden"><img src="<?php echo get_template_directory_uri(); ?>/menu.svg" alt="" class="w-14 h-14" onclick="menu()"></div>
      <nav id="nav" class="text-main-text hidden xl:block">
        <?php wp_nav_menu(
          array(
            'container_class'      => 'main-menu-container',
            // 'menu_class'           => 'menu-ul flex space-x-[30px] capitalize text-xl',
            'menu_class'           => 'menu-ul flex-row xl:flex space-x-[0px] xl:space-x-[30px] capitalize text-4xl xl:text-xl',
            'theme_location'       => 'main-menu',
          )
        ); ?>
      </nav>
    </div>
  </div>
  <!-- <div class="hidden 3xl:block fixed left-0 top-0 h-screen w-[400px] pr-8 pt-[110px] bg-white font-main2">
    <nav class="capitalize text-3xl text-right">
      <?php wp_nav_menu(
        array(
          // 'container_class'      => 'ml-auto',
          'menu_class'           => 'menu-ul',
          'theme_location'       => 'main-menu',
        )
      ); ?>
    </nav>
  </div> -->