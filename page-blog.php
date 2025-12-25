<?php get_header() ?>
<main class="blog-page">
  <section class="service-page">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png'); ?>"
      alt="Gradient_shade_image">
    <h1 class="design-title title service-title ">
      Our Exclusive
      <span class="hero-span">Blogs</span>
    </h1>
    <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/blogpage-hero-img.png') ?>"
      alt="Our Blogs" />
  </section>
  <section class="blog">
    <div class="container">
      <h1 class="blog-main-heading service-title">Our Exclusive Blogs</h1>

      <div class="grid grid-col3 grid-gap blog-grid">
        <?php
        $blog_post = new WP_Query(array(
          'post_type' => 'blog',
          'posts_per_page' => -1,
        ));

        if ($blog_post->have_posts()):
          while ($blog_post->have_posts()):
            $blog_post->the_post(); ?>
            <div class="blog-card">
              <a href="<?php echo site_url('/blog-detail/'); ?>">
                <div class="blog-img-div">
                  <img class="blog-card-img" src="<?php the_field('blog_card_image') ?>" alt="Blogs" />
                  <div class="blog-img-info">
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Exclude.png'); ?>" alt="Featured" />
                      <p>Featured</p>
                    </div>
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Vector.png'); ?>" alt="Date" />
                      <p><?php the_time('d M Y'); ?></p>
                    </div>
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Group-1000011720.png'); ?>" alt="News" />
                      <p>News</p>
                    </div>
                  </div>
                </div>
                <h2 class="blog-card-title">
                  <?php the_title(); ?>
                </h2>
              </a>
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

<?php get_footer() ?>