<?php snippet('header') ?>

<main class="o-container--full" role="main">
	<div class="o-row o-flex">
			
		<?php snippet('sidebar') ?>

		<div class="o-content u-px2 u-py2">
			<h1><?= $page->title() ?></h1>
			<hr class="u-mb2">
			<?php if($results != "" ): ?>
				<?php foreach($results as $result): ?>
				<a href="<?= $result->url() ?>">
					<h2><?= $result->title() ?></h2>
				</a>
				<p><?= excerpt($result->text(), 300) ?></p>
				<a href="<?= $result->url() ?>">read more &rsaquo;</a>
				<hr>
				<?php endforeach ?>
			<?php else: ?>
			<p><?= $page->no_results()->kirbytext() ?></p>
			<?php endif ?>
			<?= $page->text()->kirbytext() ?>
		</div>

	</div>
</main>

<?php snippet('footer') ?>