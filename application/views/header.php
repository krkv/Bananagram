<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bananagram</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo assets_url() . 'css/style.css' ?>">
        <link rel="icon" type="image/png" href="<?php echo assets_url() . 'img/favicon.ico' ?>">
    </head>
    <body>

        <div class="container">

            <div class="header clearfix">
                <nav>
                    <div>
                        <ul class="nav nav-pills pull-right">
                            <li <?php if (uri_string() == 'welcome' OR uri_string() == '') { echo 'class="active"'; } ?> role="presentation">
                                <a href="<?php echo base_url('welcome') ?>">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                    <span class="hidden-xs"> Welcome</span>
                                </a>
                            </li>
                            <li <?php if (uri_string() == 'gallery') { echo 'class="active"'; } ?> role="presentation">
                                <a href="<?php echo base_url('gallery') ?>">
                                    <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                                    <span class="hidden-xs"> Gallery</span>
                                </a>
                            </li>
                            <li <?php if (uri_string() == 'upload' OR uri_string() == 'upload/do_upload') { echo 'class="active"'; } ?> role="presentation">
                                <a href="<?php echo base_url('upload') ?>">
                                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                                    <span class="hidden-xs"> Upload</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <h3 class="hidden-xs">Bananagram</h3>
            </div>