<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
<?php # Metadaten werden in Impress Pages fuer jede einzelne Seite konfiguriert. ?>
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Talvi, kr0l, L3D" />
<?php ipAddCss('assets/css/style.css'); ?>
<?php echo ipHead(); ?>
	<link href="assets/pictures/favicon.png" rel="shortcut icon">
	<style>
		body {
			background: <?php echo ipGetThemeOption('bodyBackgroundColor', '#0e0f3e'); ?> !important;
			color: <?php echo ipGetThemeOption('textColor', '#6eb0fb'); ?> !important;
		}
 		#siteheader {
			color: <?php echo ipGetThemeOption('h1Color', '#3c4bc5'); ?> !important;
		}
		#nav {
			background-color: <?php echo ipGetThemeOption('navColor', '#004e66'); ?> !important;
		}
		#nav ul li, aside, footer {
			border-color: <?php echo ipGetThemeOption('borderColor', '#1f17a0'); ?> !important;
		}
    main {
			order: <?php $cssOrderRight = ipGetThemeOption('asidePosition', 'rechts');
      if ($cssOrderRight == 'rechts')
      { echo '1';}
      else { echo '3'; } ?> !important;
		}
    aside {
      border-right: <?php $cssOrderRight = ipGetThemeOption('asidePosition', 'rechts');
      if ($cssOrderRight == 'rechts')
      { echo 'none';}
      else { echo '4px solid #091B60'; } ?> !important;

      border-left: <?php $cssOrderRight = ipGetThemeOption('asidePosition', 'rechts');
      if ($cssOrderRight == 'rechts')
      { echo '4px solid #091B60';}
      else { echo 'none'; } ?> !important;
    }
		footer {
			background-color: <?php echo ipGetThemeOption('footerColor', '#24216c'); ?> !important;
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
				<p><?php echo chop(ipBlock('side')->render()); ?></p>
			</aside>
		</div>
	</div>
		<footer>
			<?php echo ipView('_footer.php')->render(); ?>
		</footer>
		<?php echo ipJs(); ?>
</body>
</html>
