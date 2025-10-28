<?php include __DIR__ . '/../../config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/styles.css">
	<link rel="shortcut icon" href="/assets/f35-plain-white.svg" type="image/x-icon">
	<title>Zoznam uloh</title>
</head>

<body>
	<header id="header" style="position:relative">
		<img src="/assets/f35-plain-white.svg">
		<nav id="header-nav">
			<a href="/">Hlavná stránka</a>
			<a href="/ulohy/ulohy.php">Úlohy INF</a>
		</nav>
	</header>
	<main>
		<section>
			<h1>Index</h1>
			<ul>
				<?php foreach (scandir(__DIR__) as $file) {
					if ($file === '.' || $file === '..' || $file === basename(__FILE__) || is_dir($file)) continue; ?>
					<li><a href="<?= htmlspecialchars(urlencode($file)) ?>">
							<?= htmlspecialchars($file) ?> -
							<?= date(DATE_RSS, filemtime($file) ?? filectime($file)) ?>
						</a></li>
				<?php } ?>
			</ul>
		</section>
	</main>
	<?php include ROOT . '/views/footer.php' ?>
</body>

</html>
