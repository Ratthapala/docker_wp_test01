<?php get_header(); ?>
<div class="container">
  <h1>This is index</h1>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php get_template_part('loop-content'); ?>
  <?php endwhile; endif; ?><!--ループ終了-->
  <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>'
    ) ); ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
