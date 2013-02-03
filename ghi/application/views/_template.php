<?php
/*
 * HTML page layout template
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GHI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="/assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="/assets/bootstrap/ico/favicon.png">
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">GHI</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">General Ledger</a></li>
                            <li><a href="/ap/add_vendor">Accounts Payable</a></li>
                            <li><a href="#">Accounts Receivable</a></li>
                            <li><a href="#">Purchasing</a></li>
                            <li><a href="/oe/add_invoice">Order Entry</a></li>
                            <li><a href="#">Inventory Control</a></li>                            
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            {content}

        </div> <!-- /container -->

        <script src="/assets/bootstrap/js/jquery.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-transition.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-alert.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-modal.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-scrollspy.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-tab.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-tooltip.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-popover.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-button.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-collapse.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-carousel.js"></script>
        <script src="/assets/bootstrap/js/bootstrap-typeahead.js"></script>

    </body>
</html>
