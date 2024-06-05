<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>
<body class="p-news-lists">
<?php get_template_part('include/c-header'); ?>
<main class="main">
  <div class="l-lower-mv">
    <div class="c-inner">
      <h1 class="l-lower-mv__heading">
        <span>News</span>
      </h1>
    </div>
  </div>
  <div class="l-lower-contents c-background-gray">
    <div class="c-inner">
<?php
// 記事取得コードを記述
?>
      <div class="p-news-post__button">
        <a href="/news/" class="c-button">
          News一覧に戻る
        </a>
      </div>
    </div>
  </div>
  <div class="c-breadcrumb c-background-gray">
    <div class="c-inner">
      <ol class="c-breadcrumb__list">
        <li class="c-breadcrumb__list-item">
          <a href="/">
            <span class="_link-inner">
              Home
            </span>
          </a>
        </li>
        <li class="c-breadcrumb__list-item">
          <a href="/news/">
            <span class="_text-inner _no-wrap">News</span>
          </a>
        </li>
        <li class="c-breadcrumb__list-item">
          <span class="_text-inner"><?php the_title(); ?></span>
        </li>
      </ol>
    </div>
  </div>
</main>
<?php get_footer(); ?>
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
      }, {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@id": "/news/",
          "name": "News"
        }
      }, {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@id": "<?php echo esc_url(get_permalink()); ?>",
          "name": "<?php the_title(); ?>"
        }
      }]
    }
</script>
</body>
</html>
