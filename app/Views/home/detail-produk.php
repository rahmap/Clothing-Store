<?= $this->extend('layouts/main_home') ?>

<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('outCSS') ?>

<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="breadcumb-area breadcumb-2 overlay pos-rltv">
  <div class="bread-main">
    <div class="bred-hading text-center">
    </div>
    <ol class="breadcrumb">
        <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
        <li class="active"><?= $title ?></li>
    </ol>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        <!--single-protfolio-area are start-->
        <div class="single-protfolio-area ptb-70">
          <div class="container">
              <div class="row">
                    <div class="col-lg-7">
                       <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul class="nav">
                                       <li>
                                        <a class="active" href="#view11" class="shadow-box" aria-controls="view11" data-toggle="tab"><img src="<?= base_url('produk/'.$produk['foto_depan']) ?>" alt="" /></a></li>
                                       <li>
                                        <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab"><img src="<?= base_url('produk/'.$produk['foto_belakang']) ?>" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                           <!-- <div class="social-tag">
                              <a href="#"><i class="zmdi zmdi-share"></i></a>
                           </div> -->
                            <div role="tabpanel" class="tab-pane active" id="view11">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('produk/'.$produk['foto_depan']) ?>"><img src="<?= base_url('produk/'.$produk['foto_depan']) ?>" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view22">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('produk/'.$produk['foto_belakang']) ?>"><img src="<?= base_url('produk/'.$produk['foto_belakang']) ?>" alt="Single portfolio" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="single-product-description">
                           <div class="sp-top-des">
                                <h3><?= $produk['judul_produk'] ?> <span>(<?= $produk['brand_produk'] ?>)</span></h3>
                                <div class="prodcut-ratting-price">
                                    <div class="prodcut-price">
                                        <div class="new-price"> Rp <?= number_format($produk['harga_produk'], 0, ',', '.')  ?></div>
                                        <!-- <div class="old-price"> <del>$250</del> </div> -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sp-des">
                                <p><?= $produk['keterangan_tumb'] ?></p>
                            </div>
                            <div class="sp-bottom-des">
                            <div class="social-icon socile-icon-style-1 text-center">
                                <ul>
                                    <li style="width:100%;"><a target="_blank" href="https://wa.me/6282220040831?text=Saya tertarik untuk membeli <?= $produk['judul_produk'] ?>" data-tooltip="Pesan Sekarang" class="add-cart add-cart-text" data-placement="middle" tabindex="0">Pesan Sekarang</a></li>
                                </ul>
                            </div>
                      </div>
                  </div>
              </div>
          </div>  
        </div>
        </div>
        <!--single-protfolio-area are start-->
        
        <!--descripton-area start -->
        <!-- <div class="descripton-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category row">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab" id='desc'>Description</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div class="content-tab-product-category">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                        <div class="review-wraper">
                                            <p><?= $produk['keterangan'] ?></p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     -->
        <!--descripton-area end--> 
        
        <!--new arrival area start-->
        <div class="new-arrival-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Related Product</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                        <?php foreach($randomProduk as $key): ?>
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img pos-rltv">
                                            <a href="<?= $key['slug'] ?>"> <img alt="" src="<?= base_url('produk/'.$key['foto_depan']) ?>"
                                                    class="primary-image"> <img alt="" src="<?= base_url('produk/'.$key['foto_belakang']) ?>"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="<?= $key['slug'] ?>"><?= $key['judul_produk'] ?></a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> Rp <?= number_format($key['harga_produk'], 0, ',', '.')  ?> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->
<?= $this->endSection() ?>

<?= $this->section('outJS') ?>
<script>
  $(document).ready(function(){
    $('#desc').click()
  })
</script>
<?= $this->endsection() ?>