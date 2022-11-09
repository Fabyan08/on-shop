<section class="blog-banner-area" id="blog">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Detail Produk</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <?php foreach ($barang as $brg) : ?>
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel">
                        <div class="single-prd-item">
                            <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?php echo $brg->nama_brg ?></h3>
                        <h2>Rp <?php echo number_format($brg->harga, 0, ',', '.')  ?></h2>
                        <ul class="list">
                            <li><span>Kategori</span> : <?php echo $brg->kategori ?></li>
                            <li><span>Stok</span> : <?php echo $brg->stok ?></li>
                        </ul>
                        <p><?php echo $brg->keterangan ?></p>
                        <div class="keranjang">
                            <?php echo anchor('belanja/tambah_ke_keranjang/' . $brg->id_brg, '<button class="btn btn-primary">Tambah ke Keranjang</button>') ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<br><br>