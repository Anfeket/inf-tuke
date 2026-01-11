<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="sk">

<?php include ROOT . '/views/head.php' ?>

<body>
	<?php include ROOT . '/views/header.php' ?>

	<main>
		<section id="variant-a" class="section variant">
			<h3>F35-A</h3>
			<video src="assets/f35a.webm" autoplay loop muted playsinline></video>
			<p>Variant s konvenčným vzletom a pristátím (CTOL) určený pre vzdušné sily USA, je vybavený
				vnútorným 25mm kanónom a je najobratnejším variantom.</p>
		</section>
		<section class="section" id="specifications">
			<h3>Špecifikácie F35-A</h3>
			<ul>
				<li>Posádka: 1</li>
				<li>Dĺžka: 15,7 m</li>
				<li>Rozpätie krídel: 10,7 m</li>
				<li>Výška: 4,39 m</li>
				<li>Maximálna vzletová hmotnosť: 31 800 kg</li>
				<li>Maximálna rýchlosť: Mach 1.6 (1 976 km/h)</li>
				<li>Dolet: 2 220+ km (s vnútorným palivom)</li>
				<li>Praktický dostup: 15 000 m</li>
				<li>Výzbroj:
					<ul>
						<li>1x 25mm kanón GAU-22/A (180 nábojov)</li>
						<li>Interné zbraňové priečinky pre až 4x AIM-120 AMRAAM a 2x JDAM</li>
						<li>Externé závesníky pre ďalšie zbrane a palivo</li>
					</ul>
				</li>
				<li>Motor: Pratt &amp; Whitney F135-PW-100 turbovrtuľový motor s vektorovaním ťahu</li>
			</ul>
		</section>
		<?php include ROOT . '/views/hlasovanie.php' ?>
	</main>
	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
