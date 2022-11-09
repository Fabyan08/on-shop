<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="<?php echo site_url('dashboard/index'); ?>"><img src=" <?php echo base_url() ?>assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('dashboard/index'); ?>">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('belanja/belanja'); ?>">Belanja</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('tentang/tentang'); ?>">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('kontak/kontak'); ?>">Kontak</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Log Out</a></li>
                        </ul>

                        <ul class="nav-shop">
                            <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php $keranjang = $this->cart->total_items() ?>
                                        <?php echo anchor('belanja/detail_keranjang', $keranjang) ?>
                                    </span></button></li>
                            <!-- <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->