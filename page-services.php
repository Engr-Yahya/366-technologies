<?php get_header(); ?>


<main>
  <section class="service-page">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png') ?>">
    <h1 class="service-title">
      We solve your toughest
      <span class="hero-span">challenges</span>
    </h1>
    <p class="service-description">
      You deserve a website and branding that will serve you well for years to come. Whether you need a new logo, a
      full website redesign or anything in between, our team is here to put your business in its best light.
    </p>
    <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/service-hero-img.png'); ?>" />
  </section>
  <section>
    <div class="grid-section grid grid-col2 grid-1col container">
      <?php
      $service = new WP_Query(array(
        'post_type' => 'service-page',
        'posts_per_page' => -1,
      ));

      if ($service->have_posts()):
        while ($service->have_posts()):
          $service->the_post(); ?>
          <div class="service-grid-item">
            <img class="service-grid-img" src="<?php the_field('service_image') ?>" />
            <h2 class="service-grid-title">
              <?php the_title(); ?>
            </h2>
            <div class="service-grid-description">
              <?php the_excerpt(); ?>
            </div>
            <a class="service-card-btn service-grid-btn" href="<?php the_field('btn_link') ?>">
              <?php the_field('service_btn'); ?></a>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </section>
  <section class="service-counter-img">
    <div class="container counter-card">
      <h2 class="counter-card-title">
        <?php the_field('counter_title') ?>
      </h2>
      <div class="counter-columns">
        <?php if (have_rows('counter_items')): ?>

          <?php while (have_rows('counter_items')):
            the_row(); ?>
            <div class="counter-col">
              <span class="counter-span">
                <?php the_sub_field('counter_number'); ?>
              </span>
              <p class="stats-detail">
                <?php the_sub_field('counter_label'); ?>
              </p>
            </div>
          <?php endwhile; ?>

        <?php endif; ?>
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