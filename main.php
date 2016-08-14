<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="author" content="Talvi, kr0l, L3D" />
	<?php ipAddCss('assets/css/style.css'); ?>
<?php echo ipHead(); ?>
	<link href="assets/pictures/favicon.png" rel="shortcut icon">
	<style>
		body {
			background: <?php echo ipGetThemeOption('bodyBackgroundColor', '#000'); ?> !important
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<?php echo ipView('_header.php')->render(); ?>
		</header>
		<div id="flex-asmain">
			<main>
				<?php echo ipBlock('main')->render(); ?>
			</main>
			<aside>
				<p><?php echo ipBlock('side')->render(); ?></p>
			</aside>
		</div>
	</div>
		<footer>
			<?php echo ipView('_footer.php')->render(); ?>
		</footer>
		<?php echo ipJs(); ?>
</body>
</html>
