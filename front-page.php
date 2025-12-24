<?php
get_header();
?>
<main>
  <section class="hero">
    <img class="hero-shade" src="<?php echo site_url('/wp-content/uploads/2025/12/Ellipse-11.png'); ?>" />
    <div class="hero-section ">
      <div class="hero-container flex-container">
        <div class="hero-content">
          <div>
            <h1 class="section-title hero-title"><?php the_field("hero_title"); ?> <span
                class="hero-span"><?php the_field('highlight_title'); ?> </span>
            </h1>

            <p class="hero-description">
              <?php the_field('hero_description') ?>
            </p>
          </div>
          <div>
            <p class="hashtag-review"> <?php the_field('hashtag_reviews') ?></p>
            <div class="clients flex-container">
              <img class="client-reviews" src="<?php echo site_url('/wp-content/uploads/2025/12/Container.png'); ?>" />
              <div>
                <img class="reviews" src="<?php echo site_url('/wp-content/uploads/2025/12/reviews.png'); ?>" />
                <p class="review-txt"><?php the_field('reviews') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-image">
          <img class="hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Home-Hero-Img-1.webp'); ?>" />
        </div>
      </div>
    </div>
  </section>

  <section class="logo">
    <div class="logo-container flex-container">
      <?php
      if (have_rows('logos')) {
        while (have_rows('logos')) {
          the_row();
          ?>
          <img class="logo-img" src="<?php the_sub_field("logo_img"); ?>" alt="" />
        <?php }
      } ?>
    </div>
  </section>


  <section class="services">
    <div class="container">
      <div class=" service-flex flex-container">
        <div class="inner-flex">
          <a class="service-anchor anchor" href="#"><?php the_field('service_anchor'); ?></a>
          <h2 class="service-heading">
            <?php the_field('service_heading') ?>
          </h2>
        </div>
        <p class="service-detail">
          <?php the_field('service_detail') ?>
        </p>
      </div>
      <div class="service-cards grid grid-1col">
        <?php
        $services = new WP_Query(array(
          'post_type' => 'service',
          'posts_per_page' => -1,
        ));

        if ($services->have_posts()):
          while ($services->have_posts()):
            $services->the_post(); ?>
            <div class="service-card">
              <?php echo get_field('svg_code'); ?>
              <h2 class="service-card-title"><?php the_title(); ?></h2>
              <div class="service-card-description"><?php the_excerpt(); ?></div>
              <a class="service-card-btn" href="<?php the_field('btn_link') ?>">Discover</a>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="service-cards-btn">
        <a class="anchor-btn btn" href="<?php echo site_url('/services/') ?>"><?php the_field('explore_services') ?></a>
      </div>
  </section>
  <section class="counter">
    <div class="counter-img">
      <div class="counter-card">
        <div class="flex-counter flex-container">
          <h2 class="counter-card-title"> Design for Real Humans, Not Just Users</h2>
          <div class="counter-card-detail">
            <p class="counter-card-description">
              Our design philosophy combines advanced technology with human-centered design, creating innovative,
              relatable, and enduring experiences.
            </p>
            <div class="counter-btn">
              <a class="explore-anchor-btn anchor-btn btn"
                href="<?php echo site_url('/services/') ?>"><?php the_field('explore_services') ?></a>
            </div>
          </div>
        </div>
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
  <section class="work">
    <div class="container">
      <div class=" work-flex flex-container">
        <div class="width-container">
          <a class="anchor">Portfolio</a>
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
          'posts_per_page' => 6,
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
                    <?php the_sub_field('test_description') ?>
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
  <section class="blog">
    <div class="container">
      <div class=" blog-flex flex-container">
        <div class="blog-width-container">
          <a class="anchor blog-anchor-btn">Blog</a>
          <h2 class="blog-title">
            Our Exclusive Blogs
          </h2>
          <p class="blog-description">
            Explore a collection of in-depth articles, expert insights, and the latest trends, crafted to keep you
            informed and inspired.
          </p>
        </div>
        <a class=" btn blog-btn" href="<?php echo site_url('/blog/') ?>">See More Blogs</a>
      </div>

      <div class="blog-cards flex-container">
        <?php
        $blog_post = new WP_Query(array(
          'post_type' => 'blog',
          'posts_per_page' => 3,
        ));

        if ($blog_post->have_posts()):
          while ($blog_post->have_posts()):
            $blog_post->the_post(); ?>
            <div class="blog-card">
              <a href="<?php echo site_url('/blog-detail/') ?>">
                <div class="blog-img-div">
                  <img class="blog-card-img" src="<?php the_field('blog_card_image') ?>" />
                  <div class="blog-img-info">
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Exclude.png'); ?>" />
                      <p>Featured</p>
                    </div>
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Vector.png'); ?>" />
                      <p><?php the_time('d M Y'); ?></p>
                    </div>
                    <div class="blog-anchor">
                      <img src="<?php echo site_url('/wp-content/uploads/2025/12/Group-1000011720.png'); ?>" />
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
<?php
get_footer();
?>