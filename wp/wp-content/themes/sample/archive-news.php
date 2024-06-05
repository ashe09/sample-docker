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
      <div class="p-news-lists-selectArea c-background-gray">
        <span class="p-news-lists-selectArea__selectBox">
          <select id="select_news" class="p-news-lists-selectArea__selectBox-inner" title="西暦を選択してください">
            <option value="latest">最新</option>
<?php
// option出力
?>
          </select>
        </span>
      </div>
      <div class="c-news-contents">
        <ul id="news_list" class="c-news-list">
<?php
// 記事一覧取得コードを記述
?>
        </ul>
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
          <span class="_text-inner">News</span>
        </li>
      </ol>
    </div>
  </div>
</main>
<?php get_footer(); ?>
<script src="/assets/js/selectNews.js"></script>
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
      }]
    }
</script>
</body>
</html>
