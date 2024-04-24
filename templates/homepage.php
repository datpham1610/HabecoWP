<?php 
	/* Template Name: Homepage */
?>
<?php get_header() ?>
    <section class="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div class="home-slider slider" data-aos="fade-up" data-aos-delay="500">
                        <?php $images = get_field('main_slider'); ?>
                        <?php foreach($images as $img): ?>
                        <div class="home-slider-item">
                            <div class="image">
                                <img src="<?php echo $img['url'] ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="container-fluid mx-0">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div class="bg_green">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="st2-title" data-aos="fade-up" >
                                    <?php the_field('title_1') ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="st2-content" data-aos="fade-up">
                                    <?php the_field('content_1') ?>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex flex-row justify-content-center">
                                <a class="see-more btn" data-aos="fade-up" href="<?php echo get_field('button_1')['link'] ?>"><?php echo get_field('button_1')['text'] ?></a>
                            </div>
                            <div class="col-md-12 ">
                                <div class="section2-slider slider" data-aos="fade-up">
                                    <?php $images = get_field('slider_1')?>
                                    <?php foreach($images as $img): ?>
                                    <div class="section2-slider-item">
                                        <div class="d-flex flex-row justify-content-center">
                                            <div class="border-img">
                                                <img src="<?php echo $img['url'] ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="st3-title" data-aos="fade-up">
                        <?php the_field('title_2') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="st3-content" data-aos="fade-up">
                        <?php the_field('content_2') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row beer-slider slider">
                        <?php
                            $post = query_posts(array( 
                            'showposts' => -1,
                            'post_type' => 'products',
                            'order'     => 'DESC',
                            ) );  
                            while (have_posts()) : the_post();
                        ?>
                        <div class="col-md-3 beer-slider-item" data-aos="fade-up">
                            <a href="http://habecotrading89.com.vn/san-pham/"><?php the_post_thumbnail( 'full',['class' => 'img-fluid'] ) ?></a>
                            <div class="text text-center">
                                <?php the_title( ) ?>
                            </div>
                        </div>
                        <?php endwhile;wp_reset_query() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="st4-title text-center" data-aos="fade-up">
                        <?php the_field('title_3') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php
                            $post = query_posts(array( 
                            'showposts' => 3,
                            'order'     => 'DESC',
                            ) );  
                            while (have_posts()) : the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="box-news" data-aos="fade-up">
                                <div class="image-box">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full',['class' => 'img-fluid']) ?></a>
                                </div>
                                <div class="time text-center">
                                    <?php echo get_the_date('d/m/Y');?>
                                </div>
                                <div class="title text-center">
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <a class="button-see-more btn" data-aos="fade-up" href="<?php echo get_field('button_3')['link'] ?>"><?php echo get_field('button_3')['text'] ?></a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>