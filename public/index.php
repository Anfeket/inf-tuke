<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/styles.css?v=<?= BUILD_COMMIT ?? 'dev' ?>">
	<link rel="shortcut icon" href="/assets/f35-plain-white.svg" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">
	<title>F35</title>
</head>

<body>
	<header id="header" class="hidden">
		<img src="/assets/f35-plain-white.svg">
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
				header.classList.remove('hidden');
				visible = true;
			} else if (window.scrollY <= 0 && visible) {
				header.classList.add('hidden');
				visible = false;
			}
		});
	</script>

	<main>
		<section id="hero">
			<video src="assets/f35-hero.webm" autoplay loop muted playsinline preload="auto"
				poster="assets/f35-hero-poster.webp"></video>
			<small>Video: <a href="https://www.youtube.com/watch?v=B72Z6qVqNxI" target="_blank"
					rel="noopener noreferrer">Youtube</a></small>
			<h1>F35 Lighthing II</h1>
		</section>
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
			<div id="variants-content">
				<ul>
					<li><button class="variants-button active">
							<p>F-35A</p>
							<img src="assets/f35a.webp" alt="F35-A">
						</button></li>
					<li><button class="variants-button">
							<p>F-35B</p>
							<img src="assets/f35b.webp" alt="F35-B">
						</button></li>
					<li><button class="variants-button">
							<p>F-35C</p>
							<img src="assets/f35c.webp" alt="F35-C">
						</button></li>
				</ul>
				<div id="variant-display">
					<div id="variant-a" class="variant variant-active">
						<h3>F35-A</h3>
						<video src="assets/f35a.webm" autoplay loop muted playsinline></video>
						<p>Variant s konvenčným vzletom a pristátím (CTOL) určený pre vzdušné sily USA, je vybavený
							vnútorným 25mm kanónom a je najobratnejším variantom.</p>
					</div>
					<div id="variant-b" class="variant">
						<h3>F35-B</h3>
						<video src="assets/f35b.webm" autoplay loop muted playsinline></video>
						<p>Variant s krátkým vzletom a vertikálnym pristátím (STOVL) určený pre US Marines (námorná
							pechota) a lietadlové lode bez katapultu. Je vybavený s zdvihacím dúchadlom pre vertikálne
							pristátia.</p>
					</div>
					<div id="variant-c" class="variant">
						<h3>F35-C</h3>
						<video src="assets/f35c.webm" autoplay loop muted playsinline></video>
						<p>Variant s väčšími krídlami a zosilneným podvozkom pre lietadlové lode s katapultom. Má väčší
							dolet a zlepšenú manévrovateľnosť pri nizších rychlostiach pre pristávanie.</p>
					</div>
				</div>
			</div>
			<script>
				const buttons = document.querySelectorAll('.variants-button');
				const variants = document.querySelectorAll('.variant');

				buttons.forEach((btn, i) => {
					btn.addEventListener('click', () => {
						// deactivate all buttons and variants
						buttons.forEach(b => b.classList.remove('active'));
						variants.forEach(v => v.classList.remove('variant-active'));

						// activate clicked button and corresponding variant
						btn.classList.add('active');
						variants[i].classList.add('variant-active');
					});
				});
			</script>
		</section>
	</main>

	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
