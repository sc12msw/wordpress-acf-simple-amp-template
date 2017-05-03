<?php
/**
 * Theme: Amina Flat Bootstrap child
 *
 * Template Name: Page - Amp
 *
 * This page is should fit into any theme to create an AMP page great for news articles etc.
 * Relies on Advanced custom fields plugin. Please import xml of the fields file to use this page.
 *
 * @package amina-flatbootstrap-child
 */
 ?>
 <!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php echo esc_html( get_the_title() );?></title>
    <link rel="canonical" href="<?php the_field('non_amp_url');?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php the_field('article_title');?>",
        "datePublished": "<?php echo the_date(); ?>",
        "image": [
          "<?php the_field('image_headline');?>"
        ]
      }
    </script>
    <style amp-boilerplate>
      body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    <style amp-custom>
      <?php
        require_once ('/css/amp.css');
      ?>
    </style>
    <noscript>
      <style amp-boilerplate>
        body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
      </style>
    </noscript>
  </head>
  <body class="wpamp-main">
    <nav class="wpamp-nav">
      <ul class="wpamp-nav__list">
        <li class="wpamp-nav__list-item">Testing</li>
        <li class="wpamp-nav__list-item">Testing</li>
        <li class="wpamp-nav__list-item">Testing</li>
      </ul>
    </nav>
    <h1>Welcome to the mobile web</h1>
  </body>
</html>