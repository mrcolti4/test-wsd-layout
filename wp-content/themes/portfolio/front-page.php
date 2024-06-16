<?php get_header(); ?>

<main class="page">
  <section class="hero">
    <div class="hero-container container">
      <div class="hero__content">
        <div class="hero__descr">
          <h1 class="hero__heading heading heading-1"><?php the_field("hero_title"); ?></h1>
          <p class="hero__text">
            <?php the_field("hero_description"); ?>
          </p>
          <button class="hero__btn btn" data-url="<?php the_field("hero_button_link") ?>">Free Seo Consulting Training</button>
        </div>
        
        <img src="<?php echo the_field("hero_image");?>" alt="John Doe" class="hero__img" />
      </div>
    </div>
  </section>
  <section class="about container">
    <div class="about__content">
      <div class="about__descr">
        <h2 class="about__heading heading heading-2"><?php the_field("about_title"); ?></h2>
        <p class="about__text text text-default">
          <?php the_field("about_description"); ?>
        </p>
      </div>
      <?php
      $image = get_field("about_img");
      if ($image):
        ?>
        <img class="about__img" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <?php
      endif;
      ?>
    </div>
  </section>

  <section class="feedback">
    <div class="feedback__content container">
      <div class="feedback__wrapper">
        <h2 class="feedback__heading heading heading-2">
          What My <span class="colored">Clients Say</span>
        </h2>
        <div class="swiper__buttons">
          <button type="button" class="swiper-button swiper-button-prev-unique btn-arrow">
            <i class="fa-solid fa-arrow-left swiper-icon"></i>
          </button>
          <button type="button" class="swiper-button swiper-button-next-unique btn-arrow">
            <i class="fa-solid fa-arrow-right swiper-icon"></i>
          </button>
        </div>
      </div>
      <div class="swiper">
        <ul class="swiper-wrapper">
          <?php
          $posts = get_posts(
            array(
              'numberposts' => -1,
              'category_name' => 'feedback-slider',
              'orderby' => 'date',
              'order' => 'ASC',
              'post_type' => 'post',
              'suppress_filters' => true
            )
          );

          foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <li class="swiper-slide swiper__slide slide">
              <div class="slide__content">
                <?php
                $image = get_field("slide_image");
                if ($image):
                  ?>
                  <img class="slide__img" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                  <?php
                endif;
                ?>
                <div class="slide__descr">
                  <p class="slide__text text text-italic">
                    <?php the_field("slide_description") ?>
                  </p>
                  <div class="slide__info">
                    <p class="slide__name text text-bold">
                      <?php the_field("slide_name") ?>
                    </p>
                    <p class="slide__job-title">
                      <?php the_field("slide_job_title") ?>
                    </p>
                  </div>
                </div>
              </div>
            </li>
            <?php
          }
          wp_reset_postdata();
          ?>
        </ul>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class="touch">
    <div class="touch__container container">
      <div class="touch__descr">
        <h2 class="touch__heading heading heading-2">Get in Touch</h2>
        <div class="touch__info">
          <a class="touch__email"
            href="mailto:<?php the_field("contact_email") ?>"><?php the_field("contact_email") ?></a>
          <address class="touch__address"><?php the_field("contact_address") ?></address>
        </div>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="212a77d" title="Get in touch form" html_class="touch__form"]') ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>