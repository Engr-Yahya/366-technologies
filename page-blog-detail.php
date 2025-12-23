<?php get_header(); ?>

<main class="blogdetail-page">
  <section class=" service-page container">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png'); ?>">
    <h1 class="blog-head service-title">
      Behind-the-Scenes of Art Bridges’ Success: Design, Awards, and
      <span class="hero-span">Team Insights</span>
    </h1>
    <div class="blog-hero-img-wrapper">
      <img class="blogdetail-hero-img"
        src="<?php echo site_url('/wp-content/uploads/2025/12/blogdetail-page-hero-img.png'); ?>" />

      <div class="blog-img-detail">
        <div class="blog-anchor blogdetail-anchor">
          <img src="<?php echo site_url('/wp-content/uploads/2025/12/Exclude.png'); ?>" />
          <p>Featured</p>
        </div>
        <div class="blog-anchor blogdetail-anchor">
          <img src="<?php echo site_url('/wp-content/uploads/2025/12/Vector.png'); ?>" />
          <p><?php the_time('d M Y'); ?></p>
        </div>
        <div class="blog-anchor blogdetail-anchor">
          <img src="<?php echo site_url('/wp-content/uploads/2025/12/Group-1000011720.png'); ?>" />
          <p>News</p>
        </div>
      </div>
    </div>
    </div>
    <div class="blogdetail-flex flex-container">
      <ul class="blog-flex-info-1">
        <li>Designing Around the Artwork</li>
        <li>Typography: More Than Just Fonts</li>
        <li>Balancing Beauty with Purpose</li>
        <li>Homepage That Feels Like a Gallery</li>
        <li>Future Growth for Art Bridges</li>
      </ul>
      <div class="blog-flex-info-2">
        <p class="blog-des">
          Art Bridges is one of our proudest achievements, and we’re excited to share how it has earned recognition
          from some of the most prestigious platforms, including Awwwards, The FWA, and the CSS Design Awards. These
          accolades reflect the creativity, hard work, and passion that went into making the project truly special.
        </p>
        <p class="blog-des">
          But beyond the awards, what made Art Bridges stand out? Through the lens of Dmitry Tsozik and Aleksandr
          Ratasep, our two awesome Design Leads, we uncover the processes, challenges, and creative decisions that
          shaped the Art Bridges website.
        </p>
        <h1 class="blog-heading">
          Why Your Marketing Strategy Needs More Than Just Guesswork
        </h1>
        <p class="blog-sub-des">
          This “artwork first” mindset influenced every design detail, from layout choices to the user interface. The
          goal was clear: to ensure that the artwork would always be the focal point while still helping the
          foundation achieve its goals.
          It was one of the reasons why Awwwards highlighted Art Bridges for its cutting-edge design and seamless user
          experience. We even got an Honorable nomination! </p>
        <p class="blog-sub-des">
          Known for setting high standards in the industry, Awwwards praised the balance we achieved between modern
          artistry and accessibility. The project brings together visual design and functionality in a way that feels
          both beautiful and intuitive. It's a true reflection of our team's commitment to creating designs that are
          as accessible as they are visually striking.
        </p>
        <h1 class="blog-heading">
          Typography: More Than Just Fonts
        </h1>
        <p class="blog-sub-des">
          Selecting the right typography was another critical decision in the design process. The team chose a
          combination of serif and sans-serif fonts to create contrast and harmony. Aleksandr explains,
        </p>
        <p class="blog-sub-des">
          The result is a pair of beautiful fonts that serve a functional purpose: they make the site easy to read
          while maintaining a sense of sophistication. This was a deliberate choice to ensure the content didn’t
          compete with the art but complemented it. <br />
          One of the recognitions came from the <a class="blog-des-anchor" href="#">CSS Design Awards, which
            celebrated
            Art Bridges</a> for its user-centric
          design and its focus on accessibility.
        </p>
        <p class="blog-sub-des">
          We’ve always believed that great design isn’t just about looking good — it’s about making sure everyone can
          interact with it. The CSS Design Awards highlighted how our design choices allowed the website to not only
          be visually captivating but also functional and inclusive.
        </p>
        <h1 class="blog-heading">
          Balancing Beauty with Purpose
        </h1>
        <p class="blog-sub-des">
          One of the most important goals was to create a design that didn’t just showcase art but also communicated
          the foundation’s mission.
        </p>
        <p class="blog-sub-des">
          From the start, we knew that the website had to be a tool for the foundation's programs. We structured the
          content to help visitors easily navigate through the site and learn about Art Bridges’ work — whether they
          were looking to rent artwork, organize an exhibition, or explore the collection.
        </p>
        <br>
        Aleksandr Ratasep (Design Director) <br />
        The balance between aesthetics and functionality was key. “We needed to build trust and engagement with users.
        The gallery, in particular, had to be immersive, while the program pages had to provide clear, actionable
        steps,” Aleksandr says. Thoughtful content distribution ensured that visitors could easily find the
        information they needed without feeling overwhelmed.
        </p>
        <h1 class="blog-heading">
          Homepage That Feels Like a Gallery
        </h1>
        <p class="blog-sub-des">
          One site feature that Aleksandr particularly loves is the homepage slider, which showcases the artwork right
          from the start
        </p>
        <p class="blog-sub-des">
          We wanted visitors to feel like they were walking into a gallery. As soon as they land on the page, they see
          the best works. The smooth transitions and responsive design ensure the artwork is always presented in the
          best possible way, whether you're on a phone, tablet, or desktop.
        </p>
        <p class="blog-sub-des">
          Aleksandr Ratasep (Design Director) <br />
          It was all about creating a clean, tranquil space for exploration — one that mirrored the feeling of moving
          through a gallery, where each piece commands attention
        </p>

      </div>
      <div class="blog-flex-info-3">
        <h3 class="card-title">About 366 </h3>
        <p class="blog-card-info">
          366 is a UI/UX design & branding agency in London. We team up with startups and leading brands to create
          transformative digital experience.
        </p>
        <p class="share-article"> Share this article</p>
      </div>
    </div>
    <img class="blogdetail-img" src="<?php echo site_url('/wp-content/uploads/2025/12/blogdetail-img.png') ?>" />
  </section>

  <section>
    <div class="gradient-card blog-gradient-card">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <h1 class="gradient-title section-title">
            <?php the_field('gradient_title') ?>
          </h1>
          <p class="gradient-description">
            <?php the_field('gradient_detail') ?>
          </p>
        <?php }
      } ?>
      <!-- <h1 class="gradient-title section-title">
        Subscribe to our Newsletter
      </h1>
      <p class="gradient-description">
        Get the latest insights on marketing attribution and strategy.
      </p> -->
      <div class="input-wrapper ">
        <input type="text" placeholder="Enter Your Email" size="35" required>
        <button type="submit">
          Subscribe Now!
        </button>
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
              <a href="<?php echo site_url('/') ?>">
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

<?php get_footer(); ?>