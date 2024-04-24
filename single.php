<?php get_header() ?>
	<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
    <div class="single">
        <section class="section1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/bannersingle.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-post text-center">
                            <?php the_title() ?>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2">
                        <div class="circle-avt">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 65 ); ?>
                        </div>
                    </div>
                    <div class="col-lg-11 col-md-10 d-md-flex flex-md-column justify-content-md-center">
                        <div class="post-action">
                            <?php the_author() ?>
                        </div>
                        <div class="time-post">
                            At <?php the_time('g:i a') ?>, <?php echo get_the_date('j F, Y') ?>
                        </div>
                    </div>
                </div>
                <div class="single-content">
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg1.png" class="img-fluid" alt="">
                            <div class="text-small">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                        </div>
                        <div class="col-md-10 offset-md-1">
                            <div class="box-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius dui blandit, pellentesque odio et, facilisis turpis. Mauris suscipit convallis nisl, ac laoreet sem auctor sit amet. Integer vel nibh ac magna egestas dapibus uscipit convallis nisl, ac laoreet sem<br>
                                Aliquam varius dui blandit, pellentesque odio et, facilisis turpis.
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg2.png" class="img-fluid mt-md-4" alt="">
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="text-small text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                        </div>
                        <div class="col-md-10 offset-md-1">
                            <div class="text-normal">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius dui blandit, pellentesque odio et, facilisis turpis. Mauris suscipit convallis nisl, ac laoreet sem auctor sit amet. Integer vel nibh ac magna egestas dapibus. Donec augue magna, tristique sit amet eleifend eget, pretium eget nisl. Proin tristique blandit laoreet. Praesent sagittis dui in suscipit egestas. Nulla ex urna, laoreet et commodo nec, placerat eget sapien. In ultricies congue nulla, quis pretium dui euismod sed. Sed a imperdiet nisi. Mauris vitae facilisis lorem.
                                </p>
                                <p>
                                    Fusce et dui dui. Nullam ac libero purus. Suspendisse in nisl congue, tincidunt elit nec, volutpat ipsum. Maecenas feugiat massa tortor, non malesuada odio fermentum non. Morbi et ex fringilla. Sed a imperdiet nisi. Mauris vitae facilisis lorem.
                                </p>
                                <p>
                                    Theo Báo An Ninh - Quốc phòng
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wrapper-sub-news">
                                <div class="relation">
                                    Bài viết liên quan
                                </div>
                                <hr>
                                <div class="wrapper-relation">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-slider slider">
                                                <div class="single-slider-item ">
                                                    <div class="row ">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="image">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg3.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 d-md-flex flex-md-column justify-content-md-center">
                                                                    <div class="row">
                                                                        <div class="col-md-10">
                                                                            <div class="text">
                                                                                Chủ tịch UBND tỉnh Hưng Yên đến thăm và làm việc tại công ty.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 order-lg-1 order-2 col-md-12 d-md-flex flex-md-column justify-content-md-center">
                                                                    <div class="row">
                                                                        <div class="col-md-10 offset-md-2">
                                                                            <div class="text text-right">
                                                                                Chủ tịch UBND tỉnh Hưng Yên đến thăm và làm việc tại công ty.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 order-lg-2 order1">
                                                                    <div class="image">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg3.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-slider-item">
                                                    <div class="row ">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="image">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg3.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 d-md-flex flex-md-column justify-content-md-center">
                                                                    <div class="row">
                                                                        <div class="col-md-10">
                                                                            <div class="text">
                                                                                Chủ tịch UBND tỉnh Hưng Yên đến thăm và làm việc tại công ty.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12 order-lg-1 order-2 d-md-flex flex-md-column justify-content-md-center">
                                                                    <div class="row">
                                                                        <div class="col-md-10 offset-md-2">
                                                                            <div class="text text-right">
                                                                                Chủ tịch UBND tỉnh Hưng Yên đến thăm và làm việc tại công ty.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 order-lg-2 order-1 col-md-12">
                                                                    <div class="image">
                                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/singleimg3.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php the_content( ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer() ?>