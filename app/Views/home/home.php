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
<div class="shop-main-area grid-view_area ptb-70">
  <div class="container">
    <div class="row">
      <!--main-shop-product start-->
      <div class="col-lg-9 col-md-8 order-lg-2 order-md-2 order-1">
          <div class="shop-wraper">
              <div class="col-lg-12">
                  <div class="shop-area-top">
                      <div class="row">
                          <div class="col-xl-3 d-lg-none d-xl-block d-none">
                              <div class="total-showing text-right">
                                  Showing - <span>10</span> to <span>18</span> Of Total <span>36</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12">
                  <div class="shop-total-product-area clearfix mt-35">
                      <!-- Tab panes -->
                      <div class="tab-content">
                          <!--tab grid are start-->
                          <div role="tabpanel" class="tab-pane fade show active" id="grid">
                              <div class="total-shop-product-grid row">
                              <?php foreach ($produk as $key): ?>
                                  <div class="col-lg-4 col-md-6 item">
                                      <!-- single product start-->
                                      <div class="single-product">
                                          <div class="product-img">
                                              <div class="single-prodcut-img pos-rltv">
                                                  <a href="<?= route_to($key['slug']) ?>"> <img alt=""
                                                          src="<?= base_url('produk/'.$key['foto_depan']) ?>" class="primary-image"> <img
                                                          alt="" src="<?= base_url('produk/'.$key['foto_belakang']) ?>"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text">
                                              <div class="prodcut-name"> 
                                                <a href="<?= route_to($key['slug']) ?>"> <?= $key['judul_produk'] ?></a> </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-price">
                                                      <div class="new-price">Rp <?= number_format($key['harga_produk'], 0, ',', '.')  ?> </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                              <?php endforeach; ?>
                              </div>
                          </div>
                          <!--shop grid are end-->


                          <!--pagination start-->
                          <div class="col-lg-12">
                              <div class="pagination-btn text-center">
                                  <ul class="page-numbers">
                                      <li><a href="#" class="next page-numbers"><i
                                                  class="zmdi zmdi-long-arrow-left"></i></a></li>
                                      <li><span class="page-numbers current">1</span></li>
                                      <li><a href="#" class="page-numbers">2</a></li>
                                      <li><a href="#" class="page-numbers">3</a></li>
                                      <li><a href="#" class="next page-numbers"><i
                                                  class="zmdi zmdi-long-arrow-right"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <!--pagination end-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--main-shop-product start-->

      <!--shop sidebar start-->
      <div class="col-lg-3 col-md-4 order-lg-1 order-md-1 order-2">
          <div class="shop-sidebar">
              <!--single aside start-->
              <aside class="single-aside search-aside search-box">
                  <form action="#">
                      <div class="input-box">
                          <input class="single-input" placeholder="Search...." type="text">
                          <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </aside>
              <!--single aside end-->

              <!--single aside start-->
              <aside class="single-aside catagories-aside">
                  <div class="heading-title aside-title pos-rltv">
                      <h5 class="uppercase">categories</h5>
                  </div>
                  <div id="cat-treeview" class="product-cat">
                      <ul>
                        <?php foreach($kategori as $kat): ?>
                          <li class="closed"><a href="<?= route_to($kat['slug']) ?>"><?= $kat['kategori_nama'] ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                  </div>
              </aside>
              <!--single aside end-->

              <!--single aside start-->
              <aside class="single-aside product-aside">
                  <div class="heading-title aside-title pos-rltv">
                      <h5 class="uppercase">Recent Product</h5>
                  </div>
                  <div class="recent-prodcut-wraper total-rectnt-slider">
                      <div class="single-rectnt-slider">
                          <!-- single product start-->
                          <?php foreach($recentProduk as $key): ?>
                          <div class="single-product recent-single-product">
                              <div class="product-img">
                                  <div class="single-prodcut-img pos-rltv">
                                      <a href="<?= route_to($key['slug']) ?>"> <img alt="" src="<?= base_url('produk/'.$key['fr_depan']) ?>"
                                              class="primary-image">
                                          <img alt="" src="<?= base_url('produk/'.$key['fr_belakang']) ?>" class="secondary-image"> </a>
                                  </div>
                              </div>
                              <div class="product-text">
                                  <div class="prodcut-name"> 
                                    <a href="<?= route_to($key['slug']) ?>"> <?= $key['judul_produk'] ?> </a> </div>
                                  <div class="prodcut-ratting-price">
                                      
                                      <div class="prodcut-price">
                                          <div class="new-price">Rp <?= number_format($key['harga_produk'], 0, ',', '.')  ?></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <?php endforeach; ?>
                          <!-- single product end-->

                      </div>
                  </div>

              </aside>
              <!--single aside end-->

          </div>
      </div>
      <!--shop sidebar end-->
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('outJS') ?>

<?= $this->endsection() ?>