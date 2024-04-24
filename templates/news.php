<?php
	/* Template Name: News */
?>
<?php get_header() ?>
    <div class="news">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="news-slider slider">
                        <?php
                            $post = query_posts(array( 
                            'showposts' => 5,
                            ) );  
                            while (have_posts()) : the_post();
                        ?>
                            <div class="news-slider-item">
                                        <div class="image">
                                            <img src="<?php the_field('image_slider') ?>" alt="" class="img-fluid">
                                            <div class="news-content-slider">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-md-6">
                                                            <div class="title text-right" data-aos="text-effect-1" data-aos-offset="0" data-aos-delay="500">
                                                                <?php the_field('right_text') ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="news-content-2" data-aos="fade-left" data-aos-offset="0" data-aos-delay="500">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="day">
                                                                <?php echo get_the_date('m/d/Y') ?>
                                                            </div>
                                                            <div class="sub-title">
                                                                <?php the_title() ?>
                                                            </div>
                                                            <div class="excerpt">
                                                                <?php the_excerpt(); ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 d-md-flex flex-md-column justify-content-md-end">
                                                            <button type="button" class="btn-read form-control">
                                                                <a href="<?php echo get_the_permalink(); ?>"><?php the_field('see_more') ?></a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        <?php endwhile; wp_reset_query() ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section2">
            <div class="container">
                <div class="row position-relative zindex-10">
                    <div class="col-md-12 text-center">
                        <div class="title-section2" data-aos="text-effect-1">
                            <?php the_field('title_page') ?>
                        </div>
                    </div>
                </div>
                <div class="row position-relative zindex-10">
                    <div class="col-md-12 d-md-flex flex-md-row justify-content-md-center">
                        <ul class="list-inline sub-content-st2">
                            <?php 
                                $terms = get_field('categories');
                                $index = 0;
                            ?>
                            <?php foreach($terms as $term): ?>
                            <li class="text1 list-inline-item active" data-aos="fade-left" data-aos-delay="<?php echo $index; ?>">
                                <a href="<?php echo site_url(); ?>/tin-tuc?catid=<?php echo $term ?>">
                                    <?php echo get_catname( $term )?>
                                </a>
                            </li>
                            <?php 
                                $index = $index + 150;
                                endforeach;
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="wrapper" data-aos="flip-up">
                        <?php if(isset($_GET['catid'])):; ?>
                            <?php
                                $post = query_posts(array( 
                                'showposts' => 1,
                                'cat' => $_GET['catid'],
                                ) );  
                                while (have_posts()) : the_post();
                            ?>                            
                                <div class="row mx-0">
                                    <div class="col-md-5 px-0 d-md-flex flex-md-column justify-content-md-center order-md-1 order-2">
                                        <div class="bg_news text-center">
                                            <div class="day">
                                                <?php  echo get_the_date('d/m/Y') ?>
                                            </div>
                                            <div class="news-title">
                                                <?php the_title() ?>
                                            </div>
                                            <div class="news-content">
                                                <?php the_excerpt() ?>
                                            </div>
                                            <div class="button-see">
                                                <a href="<?php echo get_the_permalink(); ?>"><?php the_field('see_more') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 px-0 order-md-2 order-1">
                                        <div class="img-right">
                                            <?php the_post_thumbnail( 'full', ['class'=>'img-fluid']) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query() ?>
                            <?php else: ?>
                                <?php
                                $post = query_posts(array( 
                                'showposts' => 1,
                                ) );  
                                while (have_posts()) : the_post();
                            ?>                            
                                <div class="row mx-0">
                                    <div class="col-md-5 px-0 d-md-flex flex-md-column justify-content-md-center order-md-1 order-2">
                                        <div class="bg_news text-center">
                                            <div class="day">
                                                <?php  echo get_the_date('d/m/Y') ?>
                                            </div>
                                            <div class="news-title">
                                                <?php the_title() ?>
                                            </div>
                                            <div class="news-content">
                                                <?php the_excerpt() ?>
                                            </div>
                                            <div class="button-see">
                                                <a href="<?php echo get_the_permalink(); ?>"><?php the_field('see_more') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 px-0">
                                        <div class="img-right order-md-2 order-1">
                                            <?php the_post_thumbnail( 'full', ['class'=>'img-fluid']) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_query() ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row bg-house">
                    <?php if(isset($_GET['catid'])):; ?>
                        <?php
                                $post = query_posts(array( 
                                'showposts' => 4,
                                'offset' => 1,
                                'cat' => $_GET['catid'],
                                'paged' => $paged
                                ) );  
                                while (have_posts()) : the_post();
                        ?>    
                        <div class="col-md-6 mb-md-5 new-hover">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="megazine-left">
                                        <img src="<?php the_field('big_image') ?>" alt="" class="img-fluid">
                                        <div class="btn-share">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/share.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 d-md-flex flex-md-column justify-content-md-center">
                                    <div class="megazine-right text-center">
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
                            <div class="paginate-2 d-flex flex-row justify-content-center">
                                <div class="previouspostslink" rel="Prev"><?php previous_posts_link( __( '<img src="'.get_template_directory_uri().'/assets/images/prev.png" alt="" class="img-fluid">' ) ); ?></div>
                            <?php wp_pagenavi();?>
                                <div class="nextpostslink" rel="Next"><?php next_posts_link( __( '<img src="'.get_template_directory_uri().'/assets/images/next.png" alt="" class="img-fluid">' ) ); ?></div>
                            <?php wp_reset_query();?>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                                $post = query_posts(array( 
                                'showposts' => 4,
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
                            <div class="paginate-2 d-flex flex-row justify-content-center">
                                <div class="previouspostslink" rel="Prev"><?php previous_posts_link( __( '<img src="'.get_template_directory_uri().'/assets/images/prev.png" alt="" class="img-fluid">' ) ); ?></div>
                            <?php wp_pagenavi();?>
                                <div class="nextpostslink" rel="Next"><?php next_posts_link( __( '<img src="'.get_template_directory_uri().'/assets/images/next.png" alt="" class="img-fluid">' ) ); ?></div>
                            <?php wp_reset_query();?>
                            </div>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer() ?>