<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/styles.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <header class="header col-sm-4">
                    <div class="navbar navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">RBJackson.com</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <?php
                                $work_active = '';
                                $about_active = '';
                                $contact_active = '';
                                switch($module)
                                {
                                    case 'work':
                                        $work_active = 'active';
                                        break;
                                    case 'about':
                                        $about_active = 'active';
                                        break;
                                    case 'contact':
                                        $contact_active = 'contact';
                                        break;
                                }
                            ?>
                            <ul class="nav navbar-nav">
                                <li class="<?php echo $work_active; ?>"><a href="#">Work</a></li>
                                <li class="<?php echo $about_active; ?>"><a href="about">About</a></li>
                                <li class="<?php echo $contact_active; ?>"><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="content col-sm-8 col-sm-push-4">
                    <?php $this->load->view($module.'/'.$view_file); ?>

                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write(unescape('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'))</script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>