<?php get_header(); ?>

<main class="page">
  <section class="hero">
    <div class="hero-container container">
      <div class="hero__content">
        <div class="hero__descr">
          <h1 class="hero__heading heading heading-1">John Doe</h1>
          <p class="hero__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor
            magna risus sed. Et dictumst vel.
          </p>
          <button class="hero__btn btn">Free Seo Consulting Training</button>
        </div>
        <img src="<?php echo bloginfo('template_url') ?>/assets/img/hero-img.png" alt="" class="hero__img" />
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
            <svg class="swiper-icon" width="20" height="20">
              <use href="<?php echo bloginfo('template_url') ?>/assets/img/icons/icons.svg#arrow-right"></use>
            </svg>
          </button>
          <button type="button" class="swiper-button swiper-button-next-unique btn-arrow">
            <svg class="swiper-icon" width="20" height="20">
              <use href="<?php echo bloginfo('template_url') ?>/assets/img/icons/icons.svg#arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper__slide slide">
            <div class="slide__content">
              <img src="<?php echo bloginfo('template_url') ?>/assets/img/slide-1.png" alt="" class="slide__img" />
              <div class="slide__descr">
                <p class="slide__text text text-italic">
                  “Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Adipiscing diam, tortor, egestas euismod neque venenatis,
                  viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit
                  praesent a laoreet. Mi, phasellus quis mauris sollicitudin non.
                  Iaculis ac duis mauris enim. “
                </p>
                <div class="slide__info">
                  <p class="slide__name text text-bold">Frank Hardy</p>
                  <p class="slide__job-title">Your Marketing Crew CEO</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper__slide slide">
            <div class="slide__content">
              <img src="<?php echo bloginfo('template_url') ?>/assets/img/slide-2.webp" alt="" class="slide__img" />
              <div class="slide__descr">
                <p class="slide__text text text-italic">
                  “Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Adipiscing diam, tortor, egestas euismod neque venenatis,
                  viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit
                  praesent a laoreet. Mi, phasellus quis mauris sollicitudin non.
                  Iaculis ac duis mauris enim. “
                </p>
                <div class="slide__info">
                  <p class="slide__name text text-bold">Frank Hardy</p>
                  <p class="slide__job-title">Your Marketing Crew CEO</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper__slide slide">
            <div class="slide__content">
              <img src="<?php echo bloginfo('template_url') ?>/assets/img/slide-3.png" alt="" class="slide__img" />
              <div class="slide__descr">
                <p class="slide__text text text-italic">
                  “Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Adipiscing diam, tortor, egestas euismod neque venenatis,
                  viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit
                  praesent a laoreet. Mi, phasellus quis mauris sollicitudin non.
                  Iaculis ac duis mauris enim. “
                </p>
                <div class="slide__info">
                  <p class="slide__name text text-bold">Frank Hardy</p>
                  <p class="slide__job-title">Your Marketing Crew CEO</p>
                </div>
              </div>
            </div>
          </div>
          ...
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class="touch">
    <div class="touch__container container">
      <div class="touch__descr">
        <h2 class="touch__heading heading heading-2">Get in Touch</h2>
        <div class="touch__info">
          <a class="touch__email" href="mailto:hello@domainexample.com">hello@domainexample.com</a>
          <address class="touch__address">237 Haylee Islands Suite 960</address>
        </div>
      </div>
      <form class="touch__form form">
        <input required type="text" placeholder="Name" name="name" class="form__input text text-default" />
        <input required type="email" placeholder="Email" name="email" class="form__input text text-default" />
        <textarea required class="form__input form__textarea" name="message"
          placeholder="Write something..."></textarea>
        <button type="submit" class="btn form__btn">
          <svg class="form__icon" width="20" height="20">
            <use href="<?php echo bloginfo('template_url') ?>/assets/img/icons/icons.svg#mail"></use>
          </svg>
          Send message
        </button>
      </form>
    </div>
  </section>

</main>

<?php get_footer(); ?>