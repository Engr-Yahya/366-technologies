<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header">
    <div class="container header-flex flex-container">
      <a href="<?php echo site_url('/'); ?>">
        <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/html/assets/svg/header-1.svg"
          alt="366 Technologies" />
      </a>
      <button class="hamburger" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="nav">
        <ul class="ul">
          <a href="<?php echo site_url('/'); ?>">
            <li class="li">Home</li>
          </a>
          <li class="li"><a href="<?php echo site_url('/services'); ?>">Services &#9662;</a>
            <ul class="dropdown">
              <a href="<?php echo site_url('/design'); ?>">
                <li>Design</li>
              </a>
              <a href="<?php echo site_url('/development'); ?>">
                <li>Development</li>
              </a>
              <a href="<?php echo site_url('/digital-marketing'); ?>">
                <li>Digital Marketing</li>
              </a>
              <a href="<?php echo site_url('/strategy'); ?>">
                <li>Strategy</li>
              </a>
            </ul>
          </li>
          <a href="<?php echo site_url('/our-work'); ?>">
            <li class="li">Our Work</li>
          </a>
          <a href="<?php echo site_url('/blog'); ?>">
            <li class="li">Blog</li>
          </a>
          <a href="<?php echo site_url('/about'); ?>">
            <li class="li">About</li>
          </a>
        </ul>
      </nav>
      <div class="header-btn">
        <a class="btn" href="<?php echo site_url('/contact-us'); ?>">Get In Touch</a>
      </div>
    </div>
  </header>