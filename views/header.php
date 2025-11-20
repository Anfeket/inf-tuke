<header id="header" class="hidden">
	<img src="/assets/f35-plain-white.svg">
	<nav id="header-nav">
		<a href="/">Hlavná stránka</a>
		<a href="/f35a.php">F35-A</a>
		<a href="/f35b.php">F35-B</a>
		<a href="/f35c.php">F35-C</a>
		<a href="/ulohy/ulohy.php">Úlohy INF</a>
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
