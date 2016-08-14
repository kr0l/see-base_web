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
			background: <?php echo ipGetThemeOption('bodyBackgroundColor', '#050d10'); ?> !important
		}
 		#siteheader {
			color: <?php echo ipGetThemeOption('h1Color', '#3c4bc5'); ?> !important
		}
		#nav {
			background-color: <?php echo ipGetThemeOption('navColor', '#1c5c5c'); ?> !important
		}
		#nav ul li, aside, footer {
			border-color: <?php echo ipGetThemeOption('borderColor', '#302a79'); ?> !important
		}
		body {
			color: <?php echo ipGetThemeOption('textColor', '#97dfeb'); ?> !important
		}
		footer {
			background-color: <?php echo ipGetThemeOption('footerColor', '#3c4bc5'); ?> !important
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
