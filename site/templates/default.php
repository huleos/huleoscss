<?php snippet('header') ?>

<main class="o-container--full" role="main">
	<div class="o-flex">

	<?php snippet('sidebar') ?>
	
	<div class="o-content u-px2 u-py2">
		<?php if(!$page->isHomePage()): ?>
			<h1><?= $page->title() ?></h1>
			<hr class="u-mb2">
		<?php endif; ?>
		<?= $page->text()->kirbytext() ?>
		<?php foreach(page()->children()->visible()->limit(null) as $item): ?>
			<h2 id="<?= $item->title() ?>"><?= $item->title() ?></h2>
			<?= $item->text()->kirbytext() ?>
			<hr class="u-mt2 u-mb2">
		<?php endforeach ?>
	</div>

	</div>
</main>

<?php snippet('footer') ?>