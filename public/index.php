<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="sk">

<?php include ROOT . '/views/head.php' ?>

<body>
	<?php include ROOT . '/views/header.php' ?>

	<main>
		<section id="hero">
			<video autoplay loop muted playsinline preload="auto" poster="assets/f35-hero-poster.webp">
				<source src="https://f35.svidnik.org/assets/f35-hero-av1.webm" type="video/webm">
				<source src="https://f35.svidnik.org/assets/f35-hero-h265.mp4" type="video/mp4">
				<source src="https://f35.svidnik.org/assets/f35-hero-h264.mp4" type="video/mp4">
			</video>
			<small>Video: <a href="https://www.youtube.com/watch?v=B72Z6qVqNxI" target="_blank"
					rel="noopener noreferrer">Youtube</a></small>
			<h1>F35 Lighthing II</h1>
		</section>
		<section class="section" id="overview">
			<h2>Prehľad</h2>
			<p><a href="https://sk.wikipedia.org/wiki/Lockheed_Martin_F-35_Lightning_II" target="_blank"
					rel="noopener noreferrer">F-35 Lightning II</a> je moderná viac-účelová stíhačka 5. generácie.
				Dokáže plniť úlohy pozemných útokov,
				prieskumu a vzdušnej obrany. Dostupná je v 3 variantoch: A, B, C.</p>
			<h3>Hlavné vlastnosti</h3>
			<ul>
				<li>
					<p>Schopnosti STOVL (Variant B)</p>
					<img src="https://f35.svidnik.org/assets/f35b-hover.webp" alt="F35-B hovering" loading="lazy">
				</li>
				<li>
					<p>AESA radar so systémom EW</p>
					<img src="https://f35.svidnik.org/assets/f35-radar.webp" alt="AN-APG-81 radar" loading="lazy">
				</li>
				<li>
					<p>Bez HUD - všetky informácie v prilbe pilota</p>
					<img src="https://f35.svidnik.org/assets/f35-hud.webp" alt="F35 HUD" loading="lazy">
				</li>
				<li>
					<p>Prepojenie a spolupráca s inými lietadlami</p>
					<img src="https://f35.svidnik.org/assets/f35-datalink.webp" alt="F35 datalink" loading="lazy">
				</li>
			</ul>
		</section>

		<section class="section" id="variants">
			<h2>Varianty</h2>
			<ul id="variants-list">
				<li><a href="/f35a.php"><button class="variants-button">
							<p>F-35A</p>
							<img src="https://f35.svidnik.org/assets/f35a.webp" alt="F35-A">
						</button></a></li>
				<li><a href="/f35b.php"><button class="variants-button">
							<p>F-35B</p>
							<img src="https://f35.svidnik.org/assets/f35b.webp" alt="F35-B">
						</button></a></li>
				<li><a href="/f35c.php"><button class="variants-button">
							<p>F-35C</p>
							<img src="https://f35.svidnik.org/assets/f35c.webp" alt="F35-C">
						</button></a></li>
			</ul>
		</section>
	</main>

	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
