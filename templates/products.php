<?php
	/* Template Name: Products */
?>
<?php get_header() ?>
    <div class="product">
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
                                            <div class="title" data-aos="fade-up" data-aos-duration="500">
                                                <?php the_field('title_page') ?>
                                            </div>
                                            <div class="content" data-aos="flip-left" data-aos-delay="500">
                                                <?php the_field('description') ?>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="title-product text-center" data-aos="fade-up" data-aos-duration="500">
                            <?php the_field('title_section2') ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row beer-two-slider slider" data-aos="zoom-out">
                        <?php
                            $post = query_posts(array( 
                            'showposts' => -1,
                            'post_type' => 'products',
                            'order'     => 'ASC',
                            ) );  
                            while (have_posts()) : the_post();
                        ?>
                            <div class="col-md-3 beer-two-slider-item">
                                <?php the_post_thumbnail( 'full', ['class' => 'img-fluid'] ) ?>
                                <div class="text text-center">
                                    <?php the_title() ?>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-two-slider slider">
                            <?php
                            $post = query_posts(array( 
                            'showposts' => -1,
                            'post_type' => 'products',
                            'order'     => 'ASC',
                            ) );  
                            while (have_posts()) : the_post();
                            ?>
                            <div class="product-two-slider-item">
                                <div class="row">
                                    <div class="col-md-6 d-md-flex flex-md-column justify-content-md-center">
                                        <div class="text-left">
                                            <div class="title pb-md-4">
                                                <?php the_title() ?>
                                            </div>
                                            <div class="content">
                                                <?php the_content() ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-md-5">
                                        <div class="img-full">
                                            <img src="<?php the_field('image_slider') ?>" class="img-fluid" alt="">
                                            <div class="best-selling">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/bestselling.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>