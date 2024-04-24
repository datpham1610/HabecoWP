<?php get_header() ?>
    <div class="shareholder">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/top-prodct.png" class="img-fluid" alt="" class="img-fluid">
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
                        <div class="box-categories">
                            <div class="main-title">
                                THÔNG TIN CỔ ĐÔNG                            
                            </div>
                            <?php
                                $cattypes = get_terms( array(
                                        'taxonomy' => 'shareholder-cat',
                                        'orderby' => 'name',
                                        'order'   => 'ASC',
                                        'hide_empty' => false,
                                        'exclude'   => 1
                                    ));
                                var_dump($cattypes)
                            ?>
                            <?php foreach($terms as $term): ?>
                            <div class="cat-name">
                                <?php echo $term->name ?>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <div class="fanpage">
                            <div class="main-title">
                                <?php the_field("title_advertisement") ?>
                            </div>
                            <div class="size-img">
                                <img src="<?php the_field('image') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
<!--                     <div class="col-md-9">
                        <?php $terms2 = get_field('categories');
                                usort($terms2, function($a, $b)
                                {
                                    return strcmp($a->term_order, $b->term_order);
                                });
                        ?>
                        <?php foreach($terms2 as $term2): ?>
                        <div class="category-box">
                            <div class="cat-name">
                                <?php echo $term2->name ?>
                            </div>
                            <div>
                                                            <?php
                                $post = query_posts(array( 
                                'showposts' => 5,
                                'post_type' => 'shareholder',
                                'tax_query' => array(
                                    array(
                                    'taxonomy' => $term2->taxonomy,
                                    'field' => 'term_id',
                                    'terms' => $term2 -> term_id
                                     )
                                  )
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
                                <?php endwhile;wp_reset_query(); ?>
                            </div> 
                            <button class="button-see-more">
                                <?php the_field('button_see_more') ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                    </div> -->
                </div>
            </div>
        </div>
        <?php var_dump(get_posts_years_array())?>
    </div>
<?php get_footer() ?>