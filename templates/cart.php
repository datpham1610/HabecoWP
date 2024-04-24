<?php
	/* Template Name: Cart */
?>
<?php get_header() ?>
    <div class="cart">
        <section class="section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="title">
                            Giỏ hàng
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="box-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="pl-70">Sản phẩm</th>
                                        <th scope="col" class="text-center">Giá</th>
                                        <th scope="col" class="text-center">Số lượng</th>
                                        <th scope="col" class="text-center">Chiết khấu</th>
                                        <th scope="col" class="text-right">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-checkout">
                                        <th scope="row" class="row">
                                            <div class="col-md-4">
                                                <div class="product">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/biahoi2lit-small.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 d-md-flex flex-md-column justify-content-md-center">
                                                <div class="info-product text-left">
                                                    <div class="name">BIA HƠI 2 LÍT</div>
                                                    <div class="species">Loại Keg Inox 2 lít</div>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="text-center">
                                            <div class="price">120 000 VNĐ</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="quality">
                                                <button type="button" class="sub">-</button>
                                                <input disabled type="number" value="1" min="1" class="input-quality">
                                                <button type="button" class="add">+</button>
                                            </div>
                                        </td>
                                        <td class="text-center">0%</td>
                                        <td class="text-right">240 000 VNĐ</td>
                                    </tr>
                                    <tr class=" product-checkout">
                                        <th scope="row" class="row">
                                            <div class="col-md-4">
                                                <div class="product">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/biahoi30lit-small.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 d-md-flex flex-md-column justify-content-md-center">
                                                <div class="info-product text-left">
                                                    <div class="name">BIA HƠI HÀ NỘI</div>
                                                    <div class="species">Loại Keg Inox 30 lít</div>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="text-center">1 200 000 VNĐ</td>
                                        <td class="text-center">
                                            <div class="quality">
                                                <button type="button" class="sub">-</button>
                                                <input disabled type="number" value="1" min="1" class="input-quality">
                                                <button type="button" class="add">+</button>
                                            </div>
                                        </td>
                                        <td class="text-center">0%</td>
                                        <td class="text-right">1 200 000 VNĐ</td>
                                    </tr>
                                    <tr class="">
                                        <th scope="row" class="row">
                                            <div class="col-md-8 offset-md-4 ">
                                                <div class="info-product text-left">
                                                    <div class="name">Tổng cộng:</div>
                                                </div>
                                            </div>
                                        </th>
                                        <td colspan="4" class="text-right">
                                            <div class="total">
                                                1 440 000 VNĐ
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3">
                        <button type="" class="pay form-control">
                            <a href="pay.html">THANH TOÁN</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>