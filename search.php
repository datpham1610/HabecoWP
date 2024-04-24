<?php
	/* Template Name: News */
?>
<?php get_header() ?>
    <div class="news search-wrapper">
        <div class="section2">
            <div class="container">
                <div class="row bg-house">
                <?php
                    $post = query_posts(array( 
                        'post_type' => 'post',
                        'showposts' => 4,
                        's' => $s,
                        'offset' => 1,
                        'paged' => $paged
                    ) );  
                    while (have_posts()) : the_post();
                ?>    
                <div class="col-md-6 mb-md-5 new-hover">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="megazine-left" data-aos="fade-up">
                                <img src="<?php the_field('big_image') ?>" alt="" class="img-fluid">
                                <div class="btn-share">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/share.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 d-md-flex flex-md-column justify-content-md-center">
                            <div class="megazine-right text-center" data-aos="fade-up">
                                <div class="day">
                                    <?php echo get_the_date('d/m/Y') ?>
                                </div>
                                <div class="title">
                                    <?php the_title() ?>
                                </div>
                                <div class="content">
                                    <?php the_excerpt() ?>
                                </div>
                                <div class="button-see2">
                                    <a href="<?php echo get_the_permalink() ?>"><?php the_field('see_more') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <div class="col-md-12">
                    <?php wp_pagenavi();?>
                    <?php wp_reset_query();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>