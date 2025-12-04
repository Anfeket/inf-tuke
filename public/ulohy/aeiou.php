<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AEIOU Form</title>
</head>

<body>
	<form method="POST" action="">
		<label for="inputText">Enter text:</label><br>
		<textarea id="inputText" name="inputText" rows="4" cols="50">
			Lorem ipsum dolor sit amet consectetur adipisicing
			elit. Architecto recusandae unde obcaecati reiciendis vel, tempora illum cupiditate nostrum odio laboriosam
			at ad odit! Nostrum, quos corporis. Ipsum ut necessitatibus soluta.
		</textarea><br><br>
		<input type="submit" value="Submit">
	</form>
	<?php
if (isset($_POST['inputText'])):
	$inputText = $_POST['inputText'];
	$hlasky = [0, 0, 0, 0, 0, 0]; // A E I O U Y
	foreach (mb_str_split($inputText) as $pismeno) {
		switch (strtolower($pismeno)) {
			case 'a':
				$hlasky[0]++;
				break;
			case 'e':
				$hlasky[1]++;
				break;
			case 'i':
				$hlasky[2]++;
				break;
			case 'o':
				$hlasky[3]++;
				break;
			case 'u':
				$hlasky[4]++;
				break;
			case 'y':
				$hlasky[5]++;
				break;
		}
	}
?>
	<ul>
		<li>
			<p>A -
				<?= htmlspecialchars($hlasky[0]) ?>
			</p>
		</li>
		<li>
			<p>E -
				<?= htmlspecialchars($hlasky[1]) ?>
			</p>
		</li>
		<li>
			<p>I -
				<?= htmlspecialchars($hlasky[2]) ?>
			</p>
		</li>
		<li>
			<p>O -
				<?= htmlspecialchars($hlasky[3]) ?>
			</p>
		</li>
		<li>
			<p>U -
				<?= htmlspecialchars($hlasky[4]) ?>
			</p>
		</li>
		<li>
			<p>Y -
				<?= htmlspecialchars($hlasky[5]) ?>
			</p>
		</li>
	</ul>
	<?php endif; ?>
</body>

</html>
