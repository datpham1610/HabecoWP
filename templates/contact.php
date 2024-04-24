<?php
	/* Template Name: Contact */
?>
<?php get_header() ?>
    <div class="contact">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="image">
                            <img src="<?php the_field('top_image') ?>" class="img-fluid" alt="" class="img-fluid">
                            <div class="section1-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="title" data-aos="fade-up">
                                                <?php echo get_field('group')['title'] ?>
                                            </div>
                                            <div class="content" data-aos="fade-up" data-aos-delay="400">
                                                <?php the_field('group')['description'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="container position-relative zindex-10">
                <div class="row">
                    <div class="col-md-6  ">
                        <div class="box-brown">
                            <div id="map" data-aos="fade-right">
                                <?php the_field('map') ?>
                            </div>
                            <div class="wrap-content text-center" data-aos="fade-right">
                                <div class="title">
                                    <?php the_field('contact') ?>
                                </div>
                                <div class="content">
                                    <div class="address">
                                        <?php the_field('address') ?>
                                    </div>
                                    <div class="phone">
                                        <?php the_field('phone') ?>
                                    </div>
                                    <div class="room">
                                        <?php the_field('room') ?>
                                    </div>
                                    <div class="email">
                                        <?php the_field('email') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="heading-form" data-aos="fade-left">
                            <?php the_field('information') ?>
                        </div>
                        <div data-aos="fade-left">
                            <?php echo do_shortcode( '[contact-form-7 id="189" title="Contact form 1"]' ) ?>
                        </div>
                       <!--  </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>