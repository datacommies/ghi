
<html>
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
        <meta NAME="Keywords" CONTENT="BCIT COMP4711 XML Codeigniter">
        <link rel="stylesheet" type="text/css" href="/assets/style.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div id="header">
                <!--                <div class="title">{title}</div> -->
            </div>
            <div id="navbar">
                {menubar}
            </div>
            <?php
                if (!defined('APPPATH'))
                    exit('No direct script access allowed');
                if (count($errors) > 0)
                {
                    foreach($errors as $booboo)
                        echo '<p><b>Oh nooooo!</b> '.$booboo.'</p>';
                }
            ?>
            <div id="content">
                {content}
            </div>
            <div id="footer">
                <p>Comp4711 Assignment 1 Order Entry By Luke Tao and Kevin Tangeman.</p>
            </div>

        </div>
    </body>
</html>
