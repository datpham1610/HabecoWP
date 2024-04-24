<?php get_header() ?>
    <div class="shareholder share-2">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-product.png" class="img-fluid" alt="" class="img-fluid">
                            <div class="section1-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="title" data-aos="text-effect" data-aos-duration="500">
                                                Cổ đông
                                            </div>
                                            <div class="content" data-aos="flip-left" data-aos-delay="500">
                                                Hưng Yên 89 (viết tắt là HABECO TRADING 89) được thành lập với điều kiện mọi mặt còn khó khăn, song nhờ nỗ lực, tâm huyết và giải pháp đúng đắn của các thế hệ lãnh đạo cũng như tập thể cán bộ công nhân viên Công ty đến nay các chỉ tiêu kinh tế đều tăng trưởng hơn trước.
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
        <div class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-categories" data-aos="zoom-in-right" data-aos-duration="1000">
                            <div class="main-title">
                                THÔNG TIN CỔ ĐÔNG                            
                            </div>
                            <?php
                                $terms = get_terms( array(
                                        'taxonomy' => 'shareholder-cat',
                                        'orderby' => 'name',
                                        'order'   => 'ASC',
                                        'hide_empty' => false,
                                        'exclude'   => 1
                                    ));
                            ?>
                            <?php foreach($terms as $term): ?>
                            <a href="<?php echo get_term_link( $term ->term_id,$term->taxonomy); ?>#boxcate" class="cat-name d-block">
                                <?php echo $term->name ?>
                            </a>
                            <?php endforeach; wp_reset_query(); ?>
                        </div>
                        <div class="fanpage" data-aos="zoom-in-right" data-aos-duration="1000">
                            <div class="main-title">
                                QUẢNG CÁO
                            </div>
                            <div class="size-img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/biaqc.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="category-box" id='boxcate'>
                            <div class="cat-name">
                                <?php single_term_title()  ?>
                            </div>
                            <?php $now = get_posts_years_array(); $y=500?>
                            <?php foreach($now as $now): ?>
                            <div class="year" data-aos="fade-up" data-aos-duration="<?php if($y <=2000): echo $y; else: $y= 500; echo $y; endif; ?>">
                                <div class="number-year"><?php echo $now ?></div>
                                <?php 
                                    $post = query_posts(array( 
                                    'showposts' => 5,
                                    'post_type' => 'shareholder',
                                    'date_query' => array(
                                        array('year' => $now)
                                    ),
                                ) );  
                                while (have_posts()) : the_post();
                                ?>
                                <div class="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="post-title">
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="date">
                                                <?php echo get_the_date('d.m.Y') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="<?php echo get_field('download')['link'] ?>" class="download d-block text-md-right">
                                                <i class="fa fa-file-o mr-lg-2" aria-hidden="true"></i>
                                                <?php echo get_field('download')['text'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                            <?php $y += 500 ;endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>