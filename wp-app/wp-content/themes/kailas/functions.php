<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return "";
}
add_filter('excerpt_more' , ' my_excerpt_more' );

//サイドバーにウィジェット追加
function widgetarea_init() {
	register_sidebar(array(
			'name'=>'サイドバー',
			'id' => 'side-widget',
			'before_widget'=>'<div id="%1$s" class="%2$s l-sidebar__section">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="l-sidebar__hdg">',
			'after_title' => '</h4>'
			));
	}
	add_action( 'widgets_init', 'widgetarea_init' );


// ページネーション
function the_pagination() {
	global $wp_query;
	$bignum = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
		return;
	echo '<nav class="pagination">';
	echo paginate_links( array(
		'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
		'format'       => '',
		'current'      => max( 1, get_query_var('paged') ),
		'total'        => $wp_query->max_num_pages,
		'prev_text'    => '&larr;',
		'next_text'    => '&rarr;',
		'type'         => 'list',
		'end_size'     => 2,
		'mid_size'     => 2
	) );
	echo '</nav>';
}