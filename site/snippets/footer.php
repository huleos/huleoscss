	<footer class="o-container--full Footer" role="footer">
		<div class="o-flex o-flex--center">
			<div class="o-content">
				<hr>
				<p>Copyright &copy; <?= date("Y") ?> <strong><?= $site->title() ?></strong> was handmade by <a href="//huleos.com">Julio César Montenegro</a></p>
			</div>
		</div>
	</footer>
	<?= js('assets/js/bundle.js') ?>
	<?= js('assets/js/prism.js', ['data-manual' => false]) ?>
</body>
</html>