<aside class="o-sidebar u-px1 u-py2" role="sidebar">

	<h1 class="Brand u-mb0">
		<a href="<?= url() ?>">
			<?= $site->title() ?>
		</a>
	</h1>
	<small>Version 0.0.6</small>

	<form action="<?= $site->find('search')->url() ?>" class="u-mt1 u-mb1">
	  <input type="text" placeholder="Search for..." name="q" class="c-form-input">
	</form>

	<h4>Settings</h4>
	<nav class="Nav">
	  <?php foreach($pages->visible() as $page): ?>
		<a href="<?= $page->url() ?>" class="Nav__link <?= e($page->isOpen(), ' active') ?>"><?= $page->title() ?> </a>
			<?php foreach($page->children()->visible() as $child): ?>
				<a href="<?= $page->url() ?>#<?= $child->title() ?>" class="Nav__link__sub"><?= $child->title() ?></a>
			<?php endforeach ?>
	  <?php endforeach ?>
	</nav>
</aside>