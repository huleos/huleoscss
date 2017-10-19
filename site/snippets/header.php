<!DOCTYPE html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png">
	<title><?= ($page->meta_title() != '') ? $page->meta_title() : $site->title() ?></title>
  <meta name="description" content="<?= ($page->meta_description() != '') ? $page->meta_description() : $site->description() ?>" />
  <link rel="canonical" href="<?= $page->url() ?>">
	<?= css('assets/css/bundle.css') ?>
	<?= css('assets/css/prism.css') ?>
	<?= css('assets/css/theme.css') ?>
</head>
<body>
