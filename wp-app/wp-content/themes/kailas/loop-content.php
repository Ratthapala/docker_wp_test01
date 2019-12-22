<article <?php post_class( 'm-article' ); ?>>
  <a href="<?php the_permalink(); ?>">
    <div class="m-article__img-wrap">
    <!--画像を追加-->
      <?php if( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/1401812_10201797301813824_6010804222499228622_o.jpg" alt="Our Guru"/>
      <?php endif; ?>
    <!--カテゴリ-->
    <?php if (!is_category() && has_category()): ?>
      <span class="m-article__cate">
      <?php
        $postcat = get_the_category();
        echo $postcat[0]->name;
      ?>
      </span>
    <?php endif; ?>
    </div><!--end img-warp-->
    <div class="m-article__text">
      <!--タイトル-->
      <h2><?php the_title(); ?></h2>

      <!--投稿日を表示-->
      <span class="m-article__date">
        <i class="far fa-clock"></i>
        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
      </span>
    </div><!--end text-->
  </a>
</article>