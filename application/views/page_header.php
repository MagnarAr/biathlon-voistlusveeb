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
    <title><?php echo $current_page_title?> | <?php echo $this->lang->line('PAGE_TITLE') ?> </title>
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
                        <li><a title="Eesti keeles" href="<?php echo base_url();?>index.php/et"><img src="<?php echo base_url();?>assets/images/ico/Estonia.png" alt="Estonian"></a></li>
                        <li><a title="In English" href="<?php echo base_url();?>index.php/en"><img src="<?php echo base_url();?>assets/images/ico/UK.png" alt="English"></a></li>
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

                <a class="navbar-brand" href="<?=base_url(); ?>">
                    <h1><img src="<?=base_url(); ?>assets/images/logo.png" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url();?>"><?php echo $this->lang->line('MAIN_PAGE') ?></a></li>
                    <li><a href="<?php echo site_url('races')?>"><?php echo $this->lang->line('RACES') ?></a></li>

                    <li><a href="<?php echo site_url('clubs')?>"><?php echo $this->lang->line('CLUBS') ?></a></li>


                                <?php if (@$user_profile):  // call var_dump($user_profile) to view all data
                                        ?>
                    <li class="dropdown"><a href="#"><?php echo $this->lang->line('USER_MENU') ?> <em class="fa fa-angle-down"></em></a>
                        <ul role="menu" class="sub-menu" id="custom_sub_menu">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <?php //var_dump($user_profile);?>
                                    <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;">

                                    <a href="http://facebook.com/<?=$user_profile['id']?>" role="button"><h2><?=$user_profile['name']?></h2></a>

                                </div>
                            </div>

                            <li><a href="<?php echo site_url('addrace')?>"><?php echo $this->lang->line('ADD_RACE') ?> </a></li>
                            <li><a href="<?php echo site_url('addresults')?>"><?php echo $this->lang->line('ADD_RESULTS') ?> </a></li>
                            <li><a href="<?php echo site_url('payment')?>"><?php echo $this->lang->line('PAY_FEE') ?></a></li>
                            <li><a href="<?= $logout_url ?>" role="button"><?php echo $this->lang->line('LOG_OUT_BTN') ?> </a></li>
                        </ul>
                    </li>
                                <?php else: ?>
                    <li class="dropdown"><a href="#" id="login_btn_bar" ><?php echo $this->lang->line('LOGIN_BTN_BAR') ?> <em class="fa fa-angle-down"></em></a>
                        <ul role="menu" class="sub-menu" id="custom_sub_menu">
                            <li><a href="<?= $login_url ?>" role="button"><em class="fa fa-facebook" ></em> <?php echo $this->lang->line('FB_LOGIN_LABEL') ?></a></li>
                        </ul>
                    </li>
                                <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</header>
<!--/#header-->
