<?php get_header(); ?>

<main class="contact-page">
  <section class="container service-page">
    <h1 class="title service-title">
      Let's Work
      <span class="hero-span">Together</span>
    </h1>
    <div class="contcat-grid">
      <?php
      if (have_rows('contact_us')) {
        while (have_rows('contact_us')) {
          the_row(); ?>
          <div class="contact-grid-item">
            <h2 class="grid-item-title"><?php the_sub_field('contact_title'); ?></h2>
            <p class="grid-item-detail"><?php the_sub_field('contact_detail_1'); ?></p>
            <p class="grid-item-detail"><?php the_sub_field('contact_detail_2'); ?></p>
            <p class="grid-item-detail"><?php the_sub_field('contact_detail_3'); ?></p>
          </div>
        <?php }
      }
      ?>

    </div>
    <img src="<?php echo site_url('/wp-content/uploads/2025/12/contact-map.png') ?>" />
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