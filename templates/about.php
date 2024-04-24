<?php
	/* Template Name: About */
?>
<?php get_header() ?>
	    <div class="about">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="about-slider slider">
                            <?php if(have_rows('slider_repeater')): ?>
                                <?php while(have_rows('slider_repeater')):the_row(); ?>
                                    <div class="about-slider-item">
                                        <div class="image">
                                            <img src="<?php the_sub_field('image') ?>" alt="" class="img-fluid">
                                            <div class="about-slider-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6 offset-lg-6 col-md-8 offset-md-4 ">
                                                            <div class="title" data-aos="fade-down">
                                                                <?php the_sub_field('title') ?>
                                                            </div>
                                                            <div class="content" data-aos="fade-up" data-aos-delay="300" data-aos-offset="100">
                                                                <?php the_sub_field('content') ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="title text-center" data-aos="fade-up">
                            <?php the_field('title') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="content" data-aos="fade-right">
                            <?php echo get_field('content')['left'] ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="content" data-aos="fade-left">
                           <?php echo get_field('content')['right'] ?>
                            <div class="beer">
                                <img src="<?php the_field('image') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="title" data-aos="fade-down-right" data-aos-duration="600">
                            <?php the_field('title_left') ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div data-aos="fade-up-left" data-aos-duration="600">
                            <img src="<?php the_field('image_right') ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="sub-title text-center" data-aos="text-effect-2">
                                <?php the_field('title_3') ?>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <div class="sub-content text-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                                <?php the_field('description_3') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="achievements-slider slider" data-aos="zoom-in">
                                    <?php if(have_rows('slider_about')): ?>
                                        <?php while(have_rows('slider_about')):the_row(); ?>
                                            <div class="achievements-slider-item">
                                                <div class="box-white">
                                                    <div class="img">
                                                        <img src="<?php the_sub_field('image') ?>" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="text text-center">
                                                        <?php the_sub_field('text') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <!-- <video autobuffer autoloop loop controls autoplay width="100%" height="auto">
                            <source src="assets/images/video.mp4">
                        </video> -->
                        <iframe data-aos="flip-up" width="100%" height="409" src="<?php the_field('link_video') ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>