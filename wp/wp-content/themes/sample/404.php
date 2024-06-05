<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>
<body class="p-notFound">
<?php get_template_part('include/c-header'); ?>
<main class="main">
  <div class="l-lower-contents p-notFound-contents c-background-gray">
    <div class="c-inner">
      <div class="p-notFound-contents-inner">
        <h1 class="p-notFound__heading">
          <span>404 Not Found</span>
          <span class="_ja">ページが見つかりません</span>
        </h1>
        <div class="p-notFound__button">
          <a href="/" class="c-button">
            Homeへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
<?php
  $permalink = ( empty($_SERVER["HTTPS"] ) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
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
        "@id": "<?php echo esc_url($permalink); ?>",
        "name": "404 Not Found"
      }
    }]
  }
</script>
</body>
</html>
