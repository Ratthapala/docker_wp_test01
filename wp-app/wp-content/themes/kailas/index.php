<?php get_header(); ?>
<div class="l-container">
  <div class="l-main">
    <div class="l-articles">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('loop-content'); ?>
      <?php endwhile; endif; ?><!--ループ終了-->
      <div class="pagination">
        <?php if( function_exists("the_pagination") ) the_pagination(); ?>
      </div>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
