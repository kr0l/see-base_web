<?php echo ipDoctypeDeclaration(); ?>

<html<?php echo ipHtmlAttributes(); ?>>
<head>
    <title>see-base</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Talvi, kr0l, L3D" />
    <?php ipAddCss('assets/style.css'); ?>
    <?php echo ipHead(); ?>
    <link href="assets/pictures/favicon.png" rel="shortcut icon">
    <style>
    <?php
        /*Schriftfarben*/
        echo "body { color: ".ipGetThemeOption('textColor', '#B6CDDB')." !important; }";
        echo "#siteheader { color: ".ipGetThemeOption('h1Color', '#7A617E')." !important; }";

        /*Hintergrundfarben*/
        echo "body { background-color: ".ipGetThemeOption('bodyBackgroundColor', '#141636')." !important; }";
        echo "#sitenav { background-color: ".ipGetThemeOption('navColor', '#6289B6')." !important; }";
        echo "#sitefooter { background-color: ".ipGetThemeOption('footerColor', '#141636')." !important; }";

        /*Main_Aside Reihenfolge*/
        if (ipGetThemeOption('asidePosition', 'rechts') == 'rechts') {
            echo "#main-content { order: 0 !important; }";
            echo "#sidebar {
                    border-right: none !important;
                    border-left: 4px solid #091B60 !important;
                }";
        }
        else {
            echo "#main-content { order: 2 !important; }";
            echo "#sidebar {
                    border-right: 4px solid #091B60;
                    border-left: none !important; }";
        }

        /*Rahmenfarben*/
        echo "#sitenav ul li, #sidebar, #sitefooter { border-color: ".ipGetThemeOption('borderColor', '#3D61B6')." !important; }";
    ?>
    @media screen and (max-width: 768px) {
        #sidebar {
            border-left: none !important;
            border-right: none !important;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">

        <?php echo ipView('_header.php')->render(); ?>

        <div id="flex-main_aside">
            <main id="main-content">
                <div class="padding-wrapper">
                    <?php echo ipBlock('main')->render(); ?>
                </div>
            </main>
            <aside id="sidebar">
                <div class="padding-wrapper">
                    <p><?php echo chop(ipBlock('side')->render()); ?></p>
                </div>
            </aside>
        </div>
        <footer id="sitefooter">
            <div class="padding-wrapper">
                <?php echo ipView('_footer.php')->render(); ?>
            </div>
        </footer>
    </div>
<?php echo ipJs(); ?>
</body>
</html>
