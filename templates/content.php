<article class="article-summary">
  <div class="article-summary__image">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
  </div>
  <div class="article-summary__copy">
    <header>
      <div class="article-summary__category-line category-line">
        <?php get_template_part('templates/category-line'); ?>
      </div>
      <h4 class="article-summary__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </header>
    <div class="article-summary__excerpt">
      <?php get_template_part('templates/standfirst'); ?>
    </div>
    <span>
      <time class="article-summary__date" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    </span>
    <span class="article-summary__byline">
      <?php get_template_part('templates/byline'); ?>
    </span>
  </div>
</article>
