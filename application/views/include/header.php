<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/md-font.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <!---right side menu start--->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/default.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css');?>" />
    <script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
    <!---right side menu end--->
    <title>FIND A TUTOR | HOME</title>
</head>

<body id="page-top" class="home">
    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div id="preloader">
            <div class="pre-icon">
                <div class="pre-item pre-item-1"></div>
                <div class="pre-item pre-item-2"></div>
                <div class="pre-item pre-item-3"></div>
                <div class="pre-item pre-item-4"></div>
            </div>
        </div>
        <!-- END / PRELOADER -->

        <!-- HEADER -->
        <header id="header" class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"><a href="index.html"><img src="<?php echo base_url('assets/images/logo.png');?>" alt=""></a></div>
                    <div class="col-md-1"><div class="search-box pull-right">
                            <i class="icon md-search"></i>
                            <div class="search-inner">
                                <form>
                                    <input type="text" placeholder="key words">
                                </form>
                            </div>
                        </div></div>
                    <div class="col-md-8">
                        <nav class="navigation">
                            <ul class="menu">
                                <li><a href="#" class="text-center"><img src="<?php echo base_url('assets/images/ask_question.png');?>" ><br />Ask a study question</a></li>
                                <li><a href="#" class="text-center"><img src="<?php echo base_url('assets/images/ask_question.png');?>" ><br />Ask for a video solution</a></li>
                                <li><a href="#" class="text-center"><img src="<?php echo base_url('assets/images/solution.png');?>" ><br />Ask for Topic Explanation</a></li>
                                <li><a href="#" class="text-center"><img src="<?php echo base_url('assets/images/exam.png');?>" ><br />Exam Preparation</a></li>
                            </ul>
                            <!-- END / MENU -->

                            <div class="column pull-right">
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <?php if(!$this->session->userdata('logged_in')){?>
                                        <li><a href="#">Sign Up</a>
                                            <ul class="dl-submenu">
                                                <li><a href="<?php echo base_url('user/register/1');?>">Tutor </a></li>
                                                <li><a href="<?php echo base_url('user/register/2');?>">Student</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('user/login');?>">Sign In</a></li>
                                        <?php }?>
                                        <li><a href="#">Subscribe</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Account</a></li>

                                            <?php if($this->session->userdata('logged_in')){?>
                                        <li><a href="<?php echo base_url('user/logout');?>">Logout</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- END / HEADER -->
