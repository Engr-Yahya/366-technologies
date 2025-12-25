<?php get_header(); ?>



<main class="ourwork-page">
  <section class=" service-page">
    <img class="service-hero-img work-bg-img"
      src="<?php echo site_url('/wp-content/uploads/2025/12/work-gradient-img.png') ?>" alt="Gradient_shade_image">
    <h1 class="design-title service-title">
      Check Our Works With
      <span class="hero-span">Real Results</span>
    </h1>
  </section>
  </section>
  <section class="work">
    <div class="container">
      <div class="work-grid grid grid-col3 grid-1col">
        <?php
        $work = new WP_Query(array(
          'post_type' => 'work',
          'posts_per_page' => -1,
        ));

        if ($work->have_posts()):
          while ($work->have_posts()):
            $work->the_post(); ?>
            <div class="work-card">
              <img class="work-img" src="<?php the_field('work_image') ?>" />
              <p class="work-anchor anchor">UI/UX Design</p>
              <p class="work-anchor anchor">Wireframe</p>
              <div class="work-info flex-container">
                <h3 class="work-card-title"><?php the_title(); ?></h3>
                <a class="arrow-btn btn" href="<?php echo site_url('/ourwork-detail/') ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/html/work/arrow-img.png" />
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
  <section class="testimonials">
    <div class="testimonial-img">
      <h1 class="test-bg-txt">
        Testimonial
      </h1>
      <div class="test-container">
        <h1 class="section-title test-title">
          What our Clients have to say
        </h1>
        <p class="test-description">
          We’re proud to partner with some of the best people on the planet, and they’re proud of us too. Hear what
          our clients have to say about working with 366 Technologies.
        </p>
        <div class="marquee test-cards">
          <div class="marquee-track" id="track">
            <?php
            if (have_rows('testimonials')) {
              while (have_rows('testimonials')) {
                the_row();
                ?>
                <div class="test-card">
                  <p class="test-card-info">
                    <?php the_sub_field('client_description') ?>
                  </p>
                  <div class="client-info">
                    <img class="client-img" src="<?php the_sub_field('client_image') ?>">
                    <div>
                      <h3 class="client-name"><?php the_sub_field('client_name') ?></h3>
                      <p class="client-rank"><?php the_sub_field('client_rank') ?> </p>
                    </div>
                  </div>
                </div>
              <?php }
            } ?>
          </div>
        </div>
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