<?php
include __DIR__ . '/../config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="assets/f35-plain-white.svg" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">
	<title>F35</title>
</head>

<body>
	<header id="header">
		<img src="assets/f35-plain-white.svg">
		<nav id="header-nav">
			<a href="">Hlavná stránka</a>
			<a href="ulohy/ulohy.php">Úlohy INF</a>
		</nav>
	</header>
	<script>
		const header = document.getElementById("header");
		let visible = false;
		window.addEventListener('scroll', () => {
			if (window.scrollY > 0 && !visible) {
				header.classList.add('visible');
				visible = true;
			} else if (window.scrollY <= 0 && visible) {
				header.classList.remove('visible');
				visible = false;
			}
		});
	</script>

	<main>
		<div id="hero">
			<video src="assets/f35-hero.webm" autoplay loop muted playsinline preload="auto"
				poster="assets/f35-hero-poster.webp"></video>
			<small>Video: <a href="https://www.youtube.com/watch?v=B72Z6qVqNxI" target="_blank"
					rel="noopener noreferrer">Youtube</a></small>
			<h1>F35 Lighthing II</h1>
		</div>
		<section id="overview">
			<h2>Prehľad</h2>
			<p><a href="https://sk.wikipedia.org/wiki/Lockheed_Martin_F-35_Lightning_II" target="_blank"
					rel="noopener noreferrer">F-35 Lightning II</a> je moderná viac-účelová stíhačka 5. generácie.
				Dokáže plniť úlohy pozemných útokov,
				prieskumu a vzdušnej obrany. Dostupná je v 3 variantoch: A, B, C.</p>
			<h3>Hlavné vlastnosti</h3>
			<ul>
				<li>
					<p>Schopnosti STOVL (Variant B)</p>
					<img src="assets/f35b-hover.webp" alt="F35-B hovering" loading="lazy">
				</li>
				<li>
					<p>AESA radar so systémom EW</p>
					<img src="assets/f35-radar.webp" alt="AN-APG-81 radar" loading="lazy">
				</li>
				<li>
					<p>Bez HUD - všetky informácie v prilbe pilota</p>
					<img src="assets/f35-hud.webp" alt="F35 HUD" loading="lazy">
				</li>
				<li>
					<p>Prepojenie a spolupráca s inými lietadlami</p>
					<img src="assets/f35-datalink.webp" alt="F35 datalink" loading="lazy">
				</li>
			</ul>
		</section>

		<section id="variants">
			<h2>Varianty</h2>
			<div>
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
				<div>
				</div>
			</div>
		</section>
	</main>

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
</body>

</html>
