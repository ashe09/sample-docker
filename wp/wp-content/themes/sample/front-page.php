<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>
<body class="p-top">
<?php get_template_part('include/c-header'); ?>
<main class="main">
  <div class="p-top-mv">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <source srcset="/assets/images/top/mv_01_sp.png" width="798" height="1120" media="(max-width:767px)">
            <img src="/assets/images/top/mv_01_pc.png" width="1770" height="956" decoding="async" alt="">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source srcset="/assets/images/top/mv_02_sp.png" width="798" height="1120" media="(max-width:767px)">
            <img src="/assets/images/top/mv_02_pc.png" width="1770" height="956" decoding="async" alt="">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source srcset="/assets/images/top/mv_03_sp.png" width="798" height="1120" media="(max-width:767px)">
            <img src="/assets/images/top/mv_03_pc.png" width="1770" height="956" decoding="async" alt="">
          </picture>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <section class="p-top-news">
    <div class="c-inner">
      <h2 class="p-top-heading">
        <span>News</span>
      </h2>
      <div class="c-news-contents _top">
        <ul class="c-news-list">
<?php
// 記事一覧取得コードを記述
?>
        </ul>
        <div class="p-top-news__button">
          <a href="/news/" class="c-button">
            More
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<script src="/assets/js/swiper-bundle.js"></script>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "/",
        "name": "Home"
      }
    }]
  }
</script>
</body>
</html>
