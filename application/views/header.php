<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>საშინაო დავალება</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?=base_url()?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/jcarousel.css" rel="stylesheet" />
<link href="<?=base_url()?>assets/css/flexslider.css" rel="stylesheet" />
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link href="<?=base_url()?>assets/skins/default.css" rel="stylesheet" />

<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>M</span>oderna</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <?php foreach($menu as $value): ?>
                        	<li><a href="<?=base_url();?>Home/index/<?=$value["link"]?>"><?=$value["title"]?></a></li>
                    	<?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->