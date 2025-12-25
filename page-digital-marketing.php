<?php get_header(); ?>

<main class="digital-page">
  <section class="service-page">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png') ?>"
      alt="Gradient_shade_image">
    <h1 class="design-title service-title title-width">
      We help businesses get more
      <span class="hero-span">Customers</span>
    </h1>
    <p class="service-description">
      Grow your business online with our results-driven digital marketing. We specialize in SEO, social media, email
      and beyond to increase traffic, leads and sales.
    </p>
    <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/digital-hero-img.png') ?>"
      alt="Digital-marketing Services" />
  </section>
  <section class="design-section">
    <h1 class="card-design-title section-title">Digital Marketing Services</h1>
    <div class="container grid grid-col3 grid-gap digital-grid grid-1col">
      <?php
      $dropdown = new WP_Query(array(
        'post_type' => 'digital-marketing',
        'posts_per_page' => -1,
      ));


      if ($dropdown->have_posts()):
        while ($dropdown->have_posts()):
          $dropdown->the_post(); ?>
          <div class="design-item">
            <div class="design-icon">
              <?php echo get_field('svg_code') ?>
            </div>
            <h2 class="design-card-title">
              <?php the_title(); ?>
            </h2>
            <div class="design-description">
              <?php the_excerpt(); ?>
            </div>
            <a class="service-card-btn" href="<?php echo site_url('/contact-us/') ?>">Discover</a>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
    <div class="services-btn">
      <a class="services-btn btn" href="#">See More Services</a>
    </div>
  </section>
  <section>
    <div class="gradient-card">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <h1 class="gradient-title section-title">
            <?php the_field('gradient_title') ?>
          </h1>
          <p class="gradient-description">
            <?php the_field('gradient_detail') ?>
          </p>
          <button class="gradient-btn btn"><a class="gradient-anchor" href="<?php the_field('gradient_btn_link') ?>">Let's
              Talk</a></button>
        <?php }
      } ?>

    </div>
  </section>
  <section class="work">
    <div class="container">
      <div class=" work-flex flex-container">
        <div class="width-container">
          <a class=" anchor" href="#">Portfolio</a>
          <h2 class="work-title">
            Our Work
          </h2>
          <p class="work-description">
            We’ve partnered with a diverse range of companies to create amazing digital experiences. Here are some of
            our standout projects.
          </p>
        </div>
        <a class="anchor-btn btn work-btn" href="<?php echo site_url('/our-work/') ?>">See More Portfolio</a>
      </div>
      <div class="work-grid grid grid-col3 grid-1col">
        <?php
        $work = new WP_Query(array(
          'post_type' => 'work',
          'posts_per_page' => 3,
        ));

        if ($work->have_posts()):
          while ($work->have_posts()):
            $work->the_post(); ?>
            <div class="work-card">
              <img class="work-img" src="<?php the_field('work_image') ?>" alt="work" />
              <p class="work-anchor anchor">UI/UX Design</p>
              <p class="work-anchor anchor">Wireframe</p>
              <div class="work-info flex-container">
                <h3 class="work-card-title"><?php the_title(); ?></h3>
                <a class="arrow-btn btn" href="<?php echo site_url('/ourwork-detail/') ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/html/work/arrow-img.png" alt="arrow" />
                </a>
              </div>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>
  <section class="form-container">
    <div class="form-flex">
      <div class="input-form-card">
        <h1 class="input-form-title">
          Schedule a <br /> Free Consultation
        </h1>
        <?php echo do_shortcode('[contact-form-7 id="8e946d8" title="consultation Form"]'); ?>

      </div>
      <div class="contact-form flex-container">
        <?php
        $contact = new WP_Query(array(
          'post_type' => 'contact',
          'posts_per_page' => 1,
        ));
        if ($contact->have_posts()) {
          while ($contact->have_posts()) {
            $contact->the_post(); ?>
            <div>
              <h1 class="contact-title"><?php the_title(); ?></h1>
              <p><?php the_field('address') ?></p>
            </div>
            <div>
              <h1 class="contact-sub-title"><?php the_field('discussion'); ?></h1>
              <p><?php the_field('email_1'); ?></p>
              <p><?php the_field('phone_1'); ?></p>
            </div>
            <div>
              <h1 class="contact-sub-title"><?php the_field('general_inquiries'); ?></h1>
              <p><?php the_field('email_2'); ?></p>
              <p><?php the_field('phone_2'); ?></p>
            </div>
          <?php }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>