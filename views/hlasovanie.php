<?php
$votes = [
	'F-35A' => 0,
	'F-35B' => 0,
	'F-35C' => 0,
	'Total' => 0,
];

if ($pdo) {
	$stmt = $pdo->prepare("SELECT variant, COUNT(*) AS vote_count FROM votes GROUP BY variant");
	$stmt->execute();
	$results = $stmt->fetchAll();
	foreach ($results as $row) {
		$variant = $row['variant'];
		$vote_count = (int)$row['vote_count'];
		if (isset($votes[$variant])) {
			$votes[$variant] = $vote_count;
			$votes['Total'] += $vote_count;
		}
	}
}
?>
<section id="hlasovanie" class="section">
	<h3>Ktorá verzia sa ti najviac páči?</h3>
	<div id="hlasovanie-options">
		<div class="hlasovanie-option" data-variant="F-35A">
			<img src="https://f35.svidnik.org/assets/f35a.webp" alt="F-35A">
			<h3>Hlasovať za F-35A</h3>
			<p>Hlasov:
				<?php echo $votes['F-35A']; ?>
			</p>
		</div>
		<div class="hlasovanie-option" data-variant="F-35B">
			<img src="https://f35.svidnik.org/assets/f35b.webp" alt="F-35B">
			<h3>Hlasovať za F-35B</h3>
			<p>Hlasov:
				<?php echo $votes['F-35B']; ?>
			</p>
		</div>
		<div class="hlasovanie-option" data-variant="F-35C">
			<img src="https://f35.svidnik.org/assets/f35c.webp" alt="F-35C">
			<h3>Hlasovať za F-35C</h3>
			<p>Hlasov:
				<?php echo $votes['F-35C']; ?>
			</p>
		</div>
	</div>
</section>
<script>
	document.querySelectorAll('.hlasovanie-option').forEach(option => {
		option.addEventListener('click', () => {
			const variant = option.getAttribute('data-variant');

			fetch('/vote.php', {
					method: 'POST',
					headers: {
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({
						variant
					})
				})
				.then(response => response.json())
				.then(data => {
					if (data.success) {
						alert('Ďakujeme za váš hlas!');
						location.reload();
					} else {
						alert('Chyba pri odosielaní hlasu. Skúste to znova.');
					}
				})
				.catch(error => {
					console.error('Error:', error);
					alert('Chyba pri odosielaní hlasu. Skúste to znova.');
				});
		});
	});
</script>
