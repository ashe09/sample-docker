<?php wp_head(); ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
<?php if ( is_front_page() ): ?>
  <title>Home</title>
  <meta name="description" content="WordPress・Docker開発環境用のサンプルサイトです。">
<?php elseif( is_archive() ): ?>
  <title>News | Smaple Environment</title>
  <meta name="description" content="News一覧ページです。">
<?php elseif( is_404() ): ?>
  <title>404 Not Found | Smaple Environment</title>
  <meta name="description" content="">
<?php else: ?>
  <title><?php echo the_title(); ?> | Smaple Environment</title>
  <?php page_description(); ?>
<?php endif; ?>
<?php if ( is_front_page() ): ?>
  <meta property="og:type" content="website">
  <meta property="og:title" content="Smaple Environment">
  <meta property="og:description" content="WordPress・Docker開発環境用のサンプルサイトです。">
  <meta property="og:url" content="https://☓☓☓☓.jp/">
<?php elseif( is_archive() ): ?>
  <meta property="og:type" content="article">
  <meta property="og:title" content="News | Smaple Environment">
  <meta property="og:description" content="News一覧ページです。">
  <meta property="og:url" content="https://☓☓☓☓.jp/news/">
<?php elseif( is_404() ): ?>
  <meta property="og:type" content="article">
  <meta property="og:title" content="404 Not Found | Smaple Environment">
  <meta property="og:description" content="">
<?php else: ?>
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo the_title(); ?> | Smaple Environment">
  <?php page_og_description(); ?>
  <meta property="og:url" content="<?php the_permalink(); ?>">
<?php endif; ?>
  <meta property="og:site_name" content="Smaple Environment">
  <meta property="og:image" content="https://☓☓☓☓.jp/ogp.jpg">
<?php if ( is_front_page() ): ?>
  <meta name="twitter:title" content="Smaple Environment">
  <meta name="twitter:description" content="WordPress・Docker開発環境用のサンプルサイトです。">
<?php elseif( is_archive() ): ?>
  <meta name="twitter:title" content="News | Smaple Environment">
  <meta name="twitter:description" content="News一覧ページです。">
<?php elseif( is_404() ): ?>
  <meta name="twitter:title" content="404 Not Found | Smaple Environment">
  <meta name="twitter:description" content="">
<?php else: ?>
  <meta name="twitter:title" content="<?php echo the_title(); ?> | Smaple Environment">
  <?php page_twitter_description(); ?>
<?php endif; ?>
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="https://☓☓☓☓.jp/ogp.jpg">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png">
<?php if ( is_front_page() ): ?>
  <link href="/assets/css/swiper-bundle.css" rel="stylesheet">
<?php endif; ?>
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
