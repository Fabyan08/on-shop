<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Product Checkout</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!--================Checkout Area =================-->
<section class="checkout_area section-margin--small">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <div class="">
                        <?php
                        $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) {
                            foreach ($keranjang as $item) {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                            echo "Total belanja Anda adalah: Rp." . number_format($grand_total, 0, ',', '.');


                        ?>
                    </div>

                    <h3>Inputkan Alamat Pengiriman & Pembayaran</h3>
                    <form class="row contact_form" action="<?php echo base_url() ?>belanja/proses_pesanan" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat Anda">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" name="no_telp" placeholder="Masukkan no. telepon Anda">
                        </div>

                        <hr>
                        <hr>

                        <label><b>
                                <h3>Jasa Pengiriman</h3>
                            </b> </label><br>
                        <div class="col-md-12 form-group p_star">
                            <label>Provinsi:</label>
                            <select class="autosearch country_select" name="provinsi">
                                <?php if ($kota) : ?>
                                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                        <option value="<?php echo $kt->province_id ?>"><?php echo $kt->province ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <script>
                            $("select[name=provinsi]").on("change", function() {
                                var id_provinsi_terpilih = $("option:selected", this).attr(id_provinsi);
                                $.ajax({
                                    type: "POST",
                                    url: "<?= base_url('rajaongkir/'); ?>"
                                });
                            })
                        </script>
                        <div class="col-md-12 form-group p_star">
                            <label>Kota/Kabupaten:</label>
                            <select class="autosearch country_select" name="kota">
                                <?php if ($kota) : ?>
                                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                        <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label>Kecamatan:</label>
                            <select class="autosearch country_select">
                                <?php if ($kota) : ?>
                                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                        <option value="<?php echo $kt->subdistrict_id ?>"><?php echo $kt->subdistrict_name ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label>Kode Pos:</label>
                            <select class="autosearch country_select"">
                                <?php if ($kota) : ?>
                                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                                        <option value=" <?php echo $kt->postal_code ?>"><?php echo $kt->postal_code ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                            </select>
                        </div>

                        <!-- <option>COD</option>
                                <option>JNE</option>
                                <option>POS Indonesia</option> -->
                        <div class="col-md-12 form-group p_star">
                            <label>Pilihan Pembayaran</label>
                            <select class="country_select">
                                <option>BCA</option>
                                <option>Gopay</option>
                                <option>OVO</option>
                                <option>Link Aja</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="button button-paypal">Konfirmasi</button>
                        </div>
                    </form>
                </div>
                <br>
                <?php
                            foreach ($this->cart->contents() as $items) : ?>

                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Pesanan Anda</h2>
                            <ul class="list">
                                <li><a href="#">
                                        <h4>Produk <span>Total</span></h4>
                                    </a></li>
                                <li><a href="#"><?php echo $items['name']  ?> <span class="middle"><?php echo $items['qty'] . "x" ?></span> <span class="last">Rp <?php echo number_format($items['price'], 0, ',', '.') ?></span></a></li>
                            </ul>
                        <?php endforeach; ?>

                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>Rp<?php echo number_format($items['subtotal'], 0, ',', '.') ?></span></a></li>
                            <!-- <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li> -->
                            <li><a href="#">Total <span>Rp<?php echo number_format($this->cart->total(), 0, ',', '.') ?></span></a></li>
                        </ul>
                        </div>
                    </div>
                <?php
                        } else {
                            echo "Keranjang masih kosong";
                        }
                ?>
            </div>
        </div>
    </div>
</section>