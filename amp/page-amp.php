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
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-user-notification" src="https://cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.1.js"></script>
    <title><?php echo esc_html( get_the_title() );?></title>
    <link rel="canonical" href="<?php the_field('canonical_url');?>" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- ## Metadata -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php the_field('article_title');?>",
        "datePublished": "<?php the_field('date'); ?>",
        "description": "A sample news article build with AMP.",
        "author": {
          "@type": "Person",
          "name": "<?php the_field('author');?>"
        },
        "publisher": {
        "@type": "Organization",
        "name": "Amina",
        "logo": {
          "@type": "ImageObject",
          "url": "<?php the_field('image_logo');?>",
          "width": 90,
          "height": 20
        }
      },
      "image": {
        "@type": "ImageObject",
        "url": "<?php the_field('image_headline');?>",
        "height": 1280,
        "width": 857
      }
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
    <amp-font layout="nodisplay"
      font-family="Quicksand"
      timeout="2000"
      on-error-remove-class="quicksand-loading"
      on-error-add-class="quicksand-missing"
      on-load-remove-class="quicksand-loading"
      on-load-add-class="quicksand-loaded">
    </amp-font>
  </head>
  <body class="wpamp-body">
    <div class="wpamp-container--main">
    <header class="wpamp-header">
      <div class="wpamp-logo">
        <a href="<?php the_field('home_url');?>" >
           <amp-img src="<?php the_field('image_logo');?>" width="90" height="20" alt="Company Home Page"></amp-img>
         </a>
       </div>
       <nav class="wpamp-nav">
        <ul class="wpamp-nav__list">
          <li><a class="wpamp-nav__list-item" href="<?php the_field('nav_url_1');?>"><?php the_field('nav_url_text_1');?></a></li>
          <li><a class="wpamp-nav__list-item" href="<?php the_field('nav_url_2');?>"><?php the_field('nav_url_text_2');?></a></li>
          <li><a class="wpamp-nav__list-item" href="<?php the_field('nav_url_3');?>"><?php the_field('nav_url_text_3');?></a></li>
        </ul>
      </nav>
      <amp-img
        src="<?php the_field('image_header');?>"
        width="1280"
        height="857"
        layout="responsive"
        alt="Header Image">
      </amp-img>
    </header>
      <main class="wpamp-main">
        <article class="wpamp-article">
          <h1 class="wpamp-article__heading"><?php the_field('article_title');?></h1>
          <section class="wpamp-section">
            <?php the_field('section_1');?>
          </section>
          <amp-img
            src="<?php the_field('image_break');?>"
            width="1280"
            height="857"
            layout="responsive"
            alt="Image of speaker">
         </amp-img>
          <section class="wpamp-section">
            <?php the_field('section_2');?>
          </section>
          <!-- ## Image Galleries  -->
          <amp-carousel width="1280"
             height="1000"
             layout="responsive"
             type="slides"
             autoplay
             delay="5000">
             <figure>
               <amp-img src="<?php the_field('cimage_1');?>"
                 width="1200"
                 height="857"
                 layout="responsive"
                 alt="Modern Interior"></amp-img>
               <figcaption><?php the_field('cimage_caption_1');?></figcaption>
             </figure>
             <figure>
               <amp-img src="<?php the_field('cimage_2');?>"
                 width="1280"
                 height="857"
                 layout="responsive"
                alt="Modern Interior"></amp-img>
               <figcaption><?php the_field('cimage_caption_2');?></figcaption>
             </figure>
             <figure>
               <amp-img src="<?php the_field('cimage_3');?>"
                 width="1200"
                 height="857"
                 layout="responsive"
                alt="Modern Interior"></amp-img>
               <figcaption><?php the_field('cimage_caption_3');?></figcaption>
             </figure>
           </amp-carousel>
        </article>
        <!-- ## Embedding related content -->
        <!-- -->
        <h2>Related Articles</h2>
        <p>These articles might be interesting for you as well:</p>
        <!-- It's a good idea to recommend related content to your readers. With `amp-list` it is possible to dynamically include personalized content into your AMPs. It's a good idea to link to the AMP version of related content in order to keep the user in the fast AMP world. Learn more about `amp-list` [here](/components/amp-list/) -->
        <amp-list width="300" height="75" layout="responsive" src="<?php echo get_stylesheet_directory_uri();?>/json/related_articles.json">
          <template type="amp-mustache">
            <a class="card related" href="{{url}}"><amp-img width="101" height="75" src="{{thumbnail}}"></amp-img><span>{{title}}</span></a>
          </template>
        </amp-list>
          </main>

    <!-- ## Cookie Consent -->
     <amp-user-notification layout="nodisplay" id="amp-user-notification1">
       This page uses cookies we assume this is ok. If you don't consent to cookies please navigate away from this page.
       <button on="tap:amp-user-notification1.dismiss">Accept</button>
     </amp-user-notification>
     <!-- ## User Analytics -->
     <?php /*<amp-analytics type="googleanalytics">
        <script type="application/json">
        {
          "vars": {
            "account": "********"
          },
          "triggers": {
            "default pageview": {
              "on": "visible",
              "request": "pageview",
              "vars": {
                "title": "{{title}}"
              }
            }
          }
        }
        </script>
      </amp-analytics> */?>
    </div>
  </body>
</html>
