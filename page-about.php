<?php get_header(); ?>

<main class="about-page">
  <section class="service-page container">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png') ?>"
      alt="Gradient_shade_image">
    <h1 class="about-head service-title">
      Welcome to
      <span class="hero-span">366 Technologies,</span>
      Your Premier Digital Agency in Glasgow
    </h1>
    <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/about-her0-img.png') ?>"
      alt="About Us" />
    <div class="about-flex-container container">
      <a class="about-anchor anchor" href="#">Who Are We</a>
      <div class="about-flex flex-container">
        <div class="blog-width-container">
          <h2 class="about-title section-title">
            <?php the_field('about_heading') ?>
          </h2>
        </div>
        <div>
          <p class="about-description blog-description">
            <?php the_field('about_detail_1') ?>
          </p>
          <br />
          <p class="about-description blog-description">
            <?php the_field('about_detail_2') ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="logo">
    <div class="logo-container flex-container">
      <?php
      if (have_rows('about_logo')) {
        while (have_rows('about_logo')) {
          the_row();
          ?>
          <img class="logo-img" src="<?php the_sub_field("about_logo_image"); ?>" alt="Logos" />
        <?php }
      } ?>
    </div>
  </section>
  <section>
    <div class="service-page container">
      <div class="about-flex-container container">
        <a class="about-anchor anchor" href="#">Demi Wilkinson</a>
        <div class="process-flex flex-container">
          <div class="blog-width-container">
            <h2 class="process-title section-title">
              Our Process
            </h2>
          </div>
          <div>
            <p class="process-description blog-description">
              At 366 Technologies, we specialize in innovative web design and development. Our team provides
              state-of-the-art services, using agile methodologies and a deep understanding of rapid design and
              development.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <?php
    if (have_rows('about_steps')) {
      while (have_rows('about_steps')) {
        the_row(); ?>
        <div class="about-step-flex flex-container">
          <h1 class="about-num"><?php the_sub_field('number') ?></h1>
          <div class="about-step-card">
            <p class="about-step btn"><?php the_sub_field('step_number') ?></p>
            <h2 class="about-step-heading">
              <?php the_sub_field('step_title') ?>
            </h2>
            <p class="about-step-description">
              <?php the_sub_field('step_detail') ?>
            </p>
          </div>
        </div>
      <?php }
    }
    ?>
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