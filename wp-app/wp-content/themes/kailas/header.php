<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/ress.css">
	<title>Kailas 2019</title>
	<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body>
  <header>
		<h2>header</h2>
		<div class="inner">
			<?php echo $title_tag_start; ?>
				<a href="<?php echo home_url(); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php echo $title_tag_end; ?>
		</div>
  </header>