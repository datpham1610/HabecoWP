<footer class="footer" id="footer">
    <div class="loading-page">
        <div class="loading-logo">
            <img class="img-fluid" src="<?php the_field('logo', 'option'); ?>" alt="<?php echo bloginfo('name'); ?>">
            <h2></h2>
            <div class="lds-ellipsis">
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="information" data-aos="fade-right" data-aos-offset="0" >
                   <?php the_field('information','options') ?>
                </div>
                <div class="address" data-aos="fade-right" data-aos-offset="0">
                    <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-home.png" alt="" class="img-fluid"></span>
                    <?php the_field('address','options') ?>
                </div>
                <div class="phone" data-aos="fade-right" data-aos-offset="0">
                    <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-phone.png" alt="" class="img-fluid"></span>
                    <?php the_field('phone','options') ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="information" data-aos="fade-left" data-aos-offset="0">
                    <?php the_field('new_letter','options') ?>
                </div>
                <form class="form-inline" data-aos="fade-left" data-aos-offset="0">
                    <input name="" value="" class="form-control input-email" placeholder="Địa chỉ Email">
                    <button type="" class="submit-btn btn">Gửi</button>
                </form>
            </div>
        </div>
        <hr class="hr-brown">
        <div class="row">
            <div class="col-md-6">
                <h5 class="lienket text-center"><?php the_field('text','options') ?></h5>
                <ul class="list-inline logo-bottom">
                    <li class="list-inline-item">
                        <a href="<?php the_field('link_icon_1','options') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/facebook-logocopy.png" alt="" class="img-fluid"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php the_field('link_icon_2','options') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Group8.png" alt="" class="img-fluid"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php the_field('link_icon_3','options') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Group7.png" alt="" class="img-fluid"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php the_field('link_icon_4','options') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Group6.png" alt="" class="img-fluid"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end justify-content-start">
                <div class="copyright d-flex flex-column justify-content-center"> <?php the_field('copyright','options') ?></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="login-modal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="close" data-dismiss="modal">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/close.png" class="img-fluid" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title text-center">
                                    Đăng nhập
                                </div>
                                <div class="form-group">
                                    <input type="" name="" class="form-control" placeholder="Tên đăng nhập hoặc email">
                                </div>
                                <div class="form-group">
                                    <input type="" name="" class="form-control" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <button type="" class="btn-login form-control">ĐĂNG NHẬP</button>
                                </div>
                                <div class="another-login text-center">
                                    HOẶC ĐĂNG NHẬP BẰNG
                                </div>
                                <div class="form-group">
                                    <button class="login-fb form-control">
                                        Facebook
                                        <div class="icon-fb">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button class="login-google form-control">
                                        Google
                                        <div class="icon-google">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<?php wp_footer() ?>
</html>