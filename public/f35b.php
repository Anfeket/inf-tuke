<?php include __DIR__ . '/../config.php' ?>
<!DOCTYPE html>
<html lang="sk">
<?php include ROOT . '/views/head.php' ?>

<body>
	<?php include ROOT . '/views/header.php' ?>
	<main>
		<section id="variant-b" class="section variant">
			<h3>F35-B</h3>
			<video src="assets/f35b.webm" autoplay loop muted playsinline></video>
			<p>Variant s krátkým vzletom a vertikálnym pristátím (STOVL) určený pre US Marines (námorná
				pechota) a lietadlové lode bez katapultu. Je vybavený s zdvihacím dúchadlom pre vertikálne
				pristátia.</p>
		</section>
		<section class="section" id="specifications">
			<h3>Špecifikácie F35-B</h3>
			<ul>
				<li>Posádka: 1</li>
				<li>Dĺžka: 15,6 m</li>
				<li>Rozpätie krídel: 10,7 m</li>
				<li>Výška: 4,36 m</li>
				<li>Maximálna vzletová hmotnosť: 27 200 kg</li>
				<li>Maximálna rýchlosť: Mach 1.6 (1 976 km/h)</li>
				<li>Dolet: 1 700+ km (s vnútorným palivom)</li>
				<li>Praktický dostup: 15 000 m</li>
				<li>Výzbroj:
					<ul>
						<li>Interné zbraňové priečinky pre až 4x AIM-120 AMRAAM a 2x JDAM</li>
						<li>Externé závesníky pre ďalšie zbrane a palivo</li>
					</ul>
				</li>
				<li>Motor: Pratt &amp; Whitney F135-PW-600 turbovrtuľový motor s vektorovaním ťahu a zdvihacím
					dúchadlom v prednej časti</li>
			</ul>
		</section>
		<?php include ROOT . '/views/hlasovanie.php' ?>
	</main>
	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
