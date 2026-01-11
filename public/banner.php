<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="sk">

<?php include ROOT . '/views/head.php' ?>

<body>
	<?php include ROOT . '/views/header.php' ?>

	<main>
		<section id="banner" class="section">
			<h3>Banner</h3>
			<div>
				<img src="https://f35.svidnik.org/assets/banner.png" alt="Banner obrázok">
			</div>
			<h4>Skopíruj nižšie:</h4>
			<pre>
				&lt;div id="banner"&gt;
				&lt;img src="https://f35.svidnik.org/assets/banner.png" alt="Banner obrázok"&gt;
			</pre>
			<button onclick="copyBannerCode()">Kopírovať kód</button>
			<script>
				function copyBannerCode() {
					const code = '<div id="banner"> <img src="https://f35.svidnik.org/assets/banner.png" alt="Banner obrázok"> </div>';
					navigator.clipboard.writeText(code).then(() => {
						const button = document.querySelector('button');
						const originalText = button.textContent;
						button.textContent = 'Kód skopírovaný!';
						setTimeout(() => {
							button.textContent = originalText;
						}, 2000);
					}, () => {
						alert('Nepodarilo sa skopírovať kód.');
					});
				}
			</script>
		</section>
	</main>
	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
