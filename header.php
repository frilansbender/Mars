<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MARS
 */

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/new.css">
  <?php wp_head(); ?>
</head>

<body>


	<video playsinline autoplay muted loop>
    <source src="<?php echo get_template_directory_uri(); ?>/video/Mars.mp4" type="video/mp4">
    <source src="<?php echo get_template_directory_uri(); ?>/video/Mars.mp4" type="video"> 
  </video>

<div class="wrapper">
  <header class="header">
    <div class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-lg" aria-label="Thirteenth navbar example">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>  
                  <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Mars.svg" alt="">
                    </a>
                    <div class="navbar-nav col-lg-9 justify-content-lg-end">              
                    <?php wp_nav_menu("menu=menu"); ?>
                      <li class="nav-item">
                        <button class="btn btn-mars" data-bs-toggle="modal" data-bs-target="#exampleModal">Купить билеты</button>
                      </li>
                    </div>
                  </div>
                </div>
              </nav>
           
        </div> 
    </div>
   	
<div class="line"></div>
</header>  