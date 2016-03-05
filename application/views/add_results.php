<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tulemused | Biathlon Võistlusveeb</title>
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
                        <li><a href="https://www.facebook.com/estonianbiathlonteam/"><i class="fa fa-facebook" ></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
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
                    <li><a href="<?php echo base_url();?>">Pealeht</a></li>
                    <li><a href="<?php echo site_url('results')?>">Tulemused</a></li>
                    <li><a href="#">Võistlused</a></li>

                    <li><a href="#">Klubid</a></li>
                    <li class="dropdown">
                        <a href="#" id="login_btn_bar" class="dropdown-toggle" data-toggle="dropdown">Sisene <i class="fa fa-angle-down"></i></a>
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
                                        <a href="#"><b>Registreeru!</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="active" href="#">Kasutaja menüü <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li class="active"><a href="#">LISA/MUUDA TULEMUSI</a></li>
                            <li><a href="#">KUSTUTA TULEMUSI</a></li>
                            <li><a href="#">TASU VÕISTLUSMAKS</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>

        </div>
    </div>
</header>
<!--/#header-->



<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Lisa/muuda tulemusi</h1>
                        <p>Vali võistlus, mille tulemusi soovid muuta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<section id="add_results" class="padding-top">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                    <tr >
                        <th class="text-center">
                            Koht
                        </th>
                        <th class="text-center" width="6%">
                            Nr
                        </th>
                        <th class="text-center">
                            Eesnimi
                        </th>
                        <th class="text-center">
                            Perenimi
                        </th>
                        <th class="text-center">
                            Klubi
                        </th>
                        <th class="text-center" colspan="4">
                            Trahvid
                        </th>
                        <th class="text-center">
                            Kokku
                        </th>
                        <th class="text-center">
                            Algus
                        </th>
                        <th class="text-center">
                            Lõpp
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            <input type="text" name='place0'  placeholder='1' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='bibno0'  placeholder='##' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first0' placeholder='Eesnimi' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='last0' placeholder='Perenimi' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='country0' placeholder='Klubi' class="form-control"/>
                        </td>
                        <!--- Trahvid -->
                        <td>
                            <input type="text" id='prone1_0' name='prone1_0'  placeholder='L' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='prone2_0'  placeholder='L' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='stand1_0'  placeholder='P' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='stand2_0'  placeholder='P' class="form-control"/>
                        </td>
                        <!-- /trahvid -->
                        <td>
                            <input type="text" id="totalmiss0" name='totalmiss0'  placeholder='0' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='starttime0'  placeholder='hh:mm:ss' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='endtime0'  placeholder='hh:mm:ss' class="form-control"/>
                        </td>

                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-success pull-left">Lisa rida</a><a id='delete_row' class="btn pull-left btn btn-danger">Kustuta rida</a>
    </div>
</section>
<!--/#projects-->


<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="../../assets/images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="testimonial bottom">
                    <h2>Testimonial</h2>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="../../assets/images/home/profile1.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                            <h3><a href="#">- Jhon Kalis</a></h3>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#"><img src="../../assets/images/home/profile2.png" alt=""></a>
                        </div>
                        <div class="media-body">
                            <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                            <h3><a href="">- Abraham Josef</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                        Fax: +1 (123) 456 7891 <br>
                    </address>

                    <h2>Address</h2>
                    <address>
                        Unit C2, St.Vincent's Trading Est., <br>
                        Feeder Road, <br>
                        Bristol, BS2 0UY <br>
                        United Kingdom <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Send a message</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Magnar, Eirik, Rio 2016. Kõik õigused kaitstud.</p>
                    <p>Disain <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/add_rows.js"></script>
</body>
</html>
