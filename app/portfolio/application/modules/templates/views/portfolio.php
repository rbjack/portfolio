<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?></title>
        <meta name="description" content="">
        <meta name="author" content="Richard Jackson" />
        <meta name="copyright" content="Copyright &copy; 2003-<?php echo date('Y'); ?>, Richard Jackson. All Rights Reserved." />
        <meta name="keywords" content="front-end web developer, web designer, web developer, web development, web standards, Flash, web, XHTML, CSS, JavaScript, AS3, ActionScript." />
        

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    </head>
    <body id="<?php echo $module ?>">
        <div class="container-fluid">
            <div class="row">
                <header class="header col-sm-3">
                    <div class="navbar navbar-inverse" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">RBJackson.com</a>
                        </div>
                        <div class="navbar-collapse collapse"><?php

                                $work_active = '';
                                $about_active = '';
                                $contact_active = '';
                                $class_state = 'active';
                                switch($module)
                                {
                                    case 'work':
                                        $work_active = $class_state;
                                        break;
                                    case 'about':
                                        $about_active = $class_state;
                                        break;
                                    case 'contact':
                                        $contact_active = $class_state;
                                        break;
                                }
                            ?>

                            <ul class="nav navbar-nav">
                                <li class="<?php echo $work_active; ?>"><a href="/">Work</a></li>
                                <li class="<?php echo $about_active; ?>"><a href="about">About</a></li>
                                <li class="<?php echo $contact_active; ?>"><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class="content col-sm-9 col-sm-push-3">
                    <?php $this->load->view($module.'/'.$view_file); ?>

                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write(unescape('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'))</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.bttrlazyloading.min.js"></script>
        <script src="js/script.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-11924095-1"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-11924095-1');</script>
    </body>
</html>