<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title() ?> - <?php bloginfo('name') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/modern-business.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory') ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
            </div>

            <?php the_menu_superior() ?>

        </div>
        <!-- /.container -->
    </nav>