<footer>
	<span>Branislav Farkaš sk. ALPHA</span>
	<span>Pilot (Pilotovanie Lietadiel)</span>
	<?php if (BUILD_DATE && BUILD_COMMIT && BUILD_URL): ?>
		<span>Posledná úprava:
			<?= BUILD_DATE ?>
		</span>
		<span>Zdroj: <a href="<?= htmlspecialchars(BUILD_URL) ?>" rel="noopener noreferrer">
				<?= BUILD_COMMIT ?>
			</a></span>
	<?php endif ?>
</footer>
