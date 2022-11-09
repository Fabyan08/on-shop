<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shopping Cart</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->



<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Sub-Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($this->cart->contents() as $items) : ?>
                            <tr>
                                <td>
                                    <!-- <div class="media"> -->
                                    <!-- <div class="d-flex">
                                            <img src="#" alt="">
                                        </div> -->
                                    <div class="media-body">
                                        <p><?php echo $items['name'] ?></p>
                                    </div>
                                    <!-- </div> -->
                                </td>
                                <td>
                                    <h5><?php echo $items['qty'] ?></h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <p>Rp <?php echo number_format($items['price'], 0, ',', '.') ?></p>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp<?php echo number_format($items['subtotal'], 0, ',', '.') ?></h5>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr class="bottom_button">
                            <td>
                                <a class="" href=""></a>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="cupon_text d-flex align-items-center">
                                    <input type="hidden" placeholder="Coupon Code">
                                    <!-- <a class="primary-btn" href="#">Apply</a> -->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>TOTAL</h5>
                            </td>
                            <td>
                                <h5>Rp<?php echo number_format($this->cart->total(), 0, ',', '.') ?></h5>
                            </td>
                        </tr>

                        <tr class="out_button_area">
                            <td class="d-none-l">

                            </td>
                            <td class="">

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="<?php echo site_url('belanja/belanja'); ?>">Kembali</a>
                                    <a class="danger-btn ml-3" href="<?php echo base_url('belanja/hapus_keranjang'); ?>">
                                        <div class="btn btn-danger">Hapus Keranjang</div>
                                    </a>
                                    <a class="primary-btn ml-2" href="<?php echo base_url('belanja/pembayaran') ?>">Konfirmasi</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>