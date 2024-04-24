<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habeco Trading 89</title>
    <?php wp_head() ?>
</head>

<body>
    <header id="header" class="">
        <div class="container-fluid bg_info mx-0">
            <div class="col-md-12 px-0">
                <div class="info" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <?php the_field('name','options') ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <button class="navbar-toggler mobile-button " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                            <span class="fa fa-times"></span>
                        </button>
                        <nav class="navbar navbar-expand-md  bg-white">
                            <div class="row width-100">
                                <ul class="d-flex menu-1" data-aos="fade-right" data-aos-delay="600">
                                    <a href="<?php echo site_url(); ?>" class="logo">
                                        <img src="<?php the_field('logo','options') ?>" class="img-fluid" alt="">
                                    </a>
                                </ul>
                                <div class="col-md-7 ">
                                    <div class=" custom-menu d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                                            <?php
                                            wp_nav_menu( array(
                                                 'theme_location' => 'primary-menu',
                                                 'depth' => 1, 
                                                 'container_class' => 'navbar-collapse d-md-flex flex-md-row justify-content-md-center',
                                                 'container_id' => 'collapsibleNavbar',
                                                 'menu_class' => 'navbar-nav',
                                                 'walker' => new wp_bootstrap_navwalker()
                                                )
                                            );
                                        ?>
                                    </div>
                                </div>
                                <ul class="d-flex flex-row justify-content-md-end list-inline menu-1 righ-menu" data-aos="fade-left" data-aos-delay="600">
                                    
                                        <div class=" box-search">
                                            <form method="get"  action="<?php echo get_home_url()?>">
                                                <input type="text" class="form-control" name="s">
                                            </form>
                                        </div>
                                    
                                    <li class="list-inline-item">
                                        <div class="login">
                                            <?php the_field('login','options') ?>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="search">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/search.png" class="img-fluid">
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="lang">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/vietnam.png" class="img-fluid" alt="">
                                        </div>
                                    </li>
                                </ul>                             
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="support">
                <a href="javascript:void(Tawk_API.toggle())">
                    <?php  the_field('support','options')?>
                </a>
            </div>
            <div class="fb-support">
                <a href="<?php the_field('link_fb','options') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook.png" alt="" class="img-fluid"></a>
            </div>
        </div>
    </header>