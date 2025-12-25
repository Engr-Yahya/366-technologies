<?php get_header(); ?>

<main class="ourwork-detail">
  <section class="service-page">
    <img class="service-hero-img" src="<?php echo site_url('/wp-content/uploads/2025/12/Gradient.png') ?>"
      alt="Gradient_shade_image">
    <img class="main-img ourwork-detail-img"
      src="<?php echo site_url('/wp-content/uploads/2025/12/ourwork-detail-hero-img.png'); ?>" alt="Work image" />
  </section>
  <section>
    <div class="container">
      <h1 class="ourwork-title">
        Case Study: The Nourished Life – Designed to Elevate Your Health
      </h1>
      <div class="ourwork-para">
        <p>
          <Span class="ourwork-span">Client:</Span>
          The Nourished Life
        </p>
        <p>
          <Span class="ourwork-span">Industry:</Span>
          Health and Nutrition
        </p>
        <p>
          <Span class="ourwork-span">Service:</Span>
          UI/UX Design, Website Development, SEO Optimization
        </p>
        <p>
          <Span class="ourwork-span">Objective:</Span>
          Build a modern, accessible platform that communicates clarity and trust to people worldwide.
        </p>
      </div>
      <h1 class="ourwork-title">
        The Challenge
      </h1>
      <p class="ourwork-para">
        The Nourished Life needed a complete digital transformation to better serve their growing community of
        health-conscious individuals. The existing platform faced critical challenges including poor mobile
        experience, fragmented user journeys, and low conversion rates on consultation bookings. Technical limitations
        such as slow loading times and an outdated content management system were hindering growth and user
        engagement.
      </p>
      <h1 class="ourwork-title">
        Our Solution
      </h1>
      <p class="ourwork-sub-para">
        We started by stripping complexity away and rebuilding from the core:
      </p>
      <h1 class="ourwork-sub-title">
        UX & Information Architecture
      </h1>
      <div class="ourwork-sub-para">
        <ul>
          <li> Conducted comprehensive user research with 25+ clients to develop detailed personas and user journey
            maps
          </li>
          <li>Restructured site hierarchy around user goals rather than service categories</li>
          <li>Created intuitive navigation with clear pathways to consultation booking</li>
          <li>Streamlined booking flow from 8 steps to 3</li>
          <li>Introduced personalized content recommendations based on user interests</li>
        </ul>
      </div>
      <h1 class="ourwork-sub-title">
        Interface Design
      </h1>
      <div class="ourwork-sub-para">
        <ul>
          <li>
            Developed a fresh, calming color palette using soft greens and earth tones to convey natural wellness
          </li>
          <li>
            Created a cohesive design system with consistent typography and component library
          </li>
          <li>
            Implemented high-quality lifestyle photography featuring diverse individuals
          </li>
          <li>
            Designed with a mobile-first approach ensuring optimal experience across all devices
          </li>
          <li>
            Strategically placed call-to-action buttons and social proof sections to drive conversions
          </li>
        </ul>
      </div>
      <h1 class="ourwork-sub-title">
        Development & Performance
      </h1>
      <div class="ourwork-sub-para">
        <ul>
          <li>
            Built on a modern architecture with progressive web features
          </li>
          <li>
            Achieved 95+ PageSpeed scores through image optimization, lazy loading, and CDN implementation
          </li>
          <li>
            Reduced page load times by 60% through optimized database queries and caching strategies
          </li>
          <li>
            Ensured WCAG 2.1 AA compliance for accessibility
          </li>
          <li>
            Implemented comprehensive SEO optimization including schema markup and semantic HTML structure
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="ourwork-img">
      <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/ourwork-img-1.png'); ?>"
        alt="Work image" />
    </div>
    <div class="container">
      <h1 class="ourwork-title">
        Results (Key Metrics)
      </h1>
      <div class="ourwork-sub-para">
        <ul>
          <li>
            240% increase in consultation booking conversions and 78% increase in average session duration
          </li>
          <li>
            65% reduction in bounce rate (from 68% to 24%) and 150% increase in page views per session
          </li>
          <li>
            300% growth in monthly recurring revenue within 6 months and 250% increase in organic search traffic
          </li>
          <li>
            95+ PageSpeed score across all pages with 60% faster page load times and 99.9% uptime
          </li>
        </ul>
      </div>
      <h1 class="ourwork-title">
        Tech Stack & Tools Used
      </h1>
      <div class="ourwork-sub-para">
        <ul>
          <li>
            Figma - UI/UX design and prototyping
          </li>
          <li>
            Adobe Creative Suite - Image editing and asset creation
          </li>
          <li>
            React.js - Component-based UI development
          </li>
          <li>
            Next.js - Server-side rendering and optimization
          </li>
          <li>
            Implemented comprehensive SEO optimization including schema markup and semantic HTML structure
          </li>
        </ul>
      </div>
      <p class="ourwork-para">
        This project demonstrates how thoughtful UX design combined with modern development practices can create
        significant business impact while improving user experience across all touchpoints.
      </p>
    </div>
    <div class="ourwork-img">
      <img class="main-img" src="<?php echo site_url('/wp-content/uploads/2025/12/ourwork-img-2-scaled.png'); ?>"
        alt="Work Image" />
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