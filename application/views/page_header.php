<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pealeht | Biathlon Võistlusveeb</title>
    <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets/css/lightbox.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?=base_url(); ?>assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href="https://www.facebook.com/estonianbiathlonteam/"><em class="fa fa-facebook" ></em></a></li>
                        <li><a href=""><em class="fa fa-twitter"></em></a></li>
                        <li><a href=""><em class="fa fa-google-plus"></em></a></li>
                        <li><a href=""><em class="fa fa-dribbble"></em></a></li>
                        <li><a href=""><em class="fa fa-linkedin"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <h1><img src="<?=base_url(); ?>assets/images/logo.png" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url();?>">Pealeht</a></li>
                    <li><a href="<?php echo site_url('results')?>">Tulemused</a></li>
                    <li><a href="#">Võistlused</a></li>

                    <li><a href="#">Klubid</a></li>
                    <li class="dropdown">
                        <a href="#" id="login_btn_bar" class="dropdown-toggle" data-toggle="dropdown">Sisene <em class="fa fa-angle-down"></em></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">

                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email aadress</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email aadress" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Parool</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Parool" required>
                                                <div class="help-block text-right"><a href="">Unustasid parooli?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Logi sisse</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> jäta mind meelde
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        <a href="#"><strong>Registreeru!</strong></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Kasutaja menüü <em class="fa fa-angle-down"></em></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="<?php echo site_url('addrace')?>">LISA/VÕISTLUS</a></li>
                            <li><a href="<?php echo site_url('addresults')?>">LISA/MUUDA TULEMUSI</a></li>
                            <li><a href="#">KUSTUTA TULEMUSI</a></li>
                            <li><a href="#">TASU VÕISTLUSMAKS</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <em class="fa fa-search"></em>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!--/#header-->
