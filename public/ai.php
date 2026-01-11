<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="sk">

<?php include ROOT . '/views/head.php' ?>

<body>
	<?php include ROOT . '/views/header.php' ?>

	<main>
		<section id="ai" class="section">
			<div class="slide">
				<img src="https://f35.svidnik.org/assets/ai/1_F-35-Lightning-II-Stihacka-buducnosti.png" alt="Slide 1">
				<button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve">
						<path
							d="M37.728 328.12a15 15 0 0 0 15.222-.4l240-149.999a15 15 0 0 0 0-25.44L52.95 2.28A15 15 0 0 0 30 15v300a15 15 0 0 0 7.728 13.12" />
					</svg>
					<p>Prehrať Zvuk</p>
				</button>
			</div>
			<div class="slide">
				<img src="https://f35.svidnik.org/assets/ai/2_Co-robi-F-35-vynimocnym.png" alt="Slide 2">
				<button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve">
						<path
							d="M37.728 328.12a15 15 0 0 0 15.222-.4l240-149.999a15 15 0 0 0 0-25.44L52.95 2.28A15 15 0 0 0 30 15v300a15 15 0 0 0 7.728 13.12" />
					</svg>
					<p>Prehrať Zvuk</p>
				</button>
			</div>
			<div class="slide">
				<img src="https://f35.svidnik.org/assets/ai/3_Revolucne-technologie.png" alt="Slide 3">
				<button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve">
						<path
							d="M37.728 328.12a15 15 0 0 0 15.222-.4l240-149.999a15 15 0 0 0 0-25.44L52.95 2.28A15 15 0 0 0 30 15v300a15 15 0 0 0 7.728 13.12" />
					</svg>
					<p>Prehrať Zvuk</p>
				</button>
			</div>
			<div class="slide">
				<img src="https://f35.svidnik.org/assets/ai/4_Tri-specializovane-varianty.png" alt="Slide 4">
				<button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve">
						<path
							d="M37.728 328.12a15 15 0 0 0 15.222-.4l240-149.999a15 15 0 0 0 0-25.44L52.95 2.28A15 15 0 0 0 30 15v300a15 15 0 0 0 7.728 13.12" />
					</svg>
					<p>Prehrať Zvuk</p>
				</button>
			</div>
			<div class="slide">
				<img src="https://f35.svidnik.org/assets/ai/5_Buducnost-letectva-je-tu.png" alt="Slide 5">
				<button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve">
						<path
							d="M37.728 328.12a15 15 0 0 0 15.222-.4l240-149.999a15 15 0 0 0 0-25.44L52.95 2.28A15 15 0 0 0 30 15v300a15 15 0 0 0 7.728 13.12" />
					</svg>
					<p>Prehrať Zvuk</p>
				</button>
			</div>
		</section>
		<script>
			document.querySelectorAll('#ai div').forEach((slide, index) => {
				const button = slide.querySelector('button');
				const audio = new Audio(`https://f35.svidnik.org/assets/ai/audio${index + 1}.mp3`);
				button.addEventListener('click', () => {
					audio.play();
				});
			});
		</script>
	</main>
	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
