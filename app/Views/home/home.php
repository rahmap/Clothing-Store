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
                                  <div class="col-lg-4 col-md-6 item">
                                      <!-- single product start-->
                                      <div class="single-product">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/04.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/03.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text">
                                              <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Quisque
                                                      fringilla</a> </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-price">
                                                      <div class="new-price"> $220 </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-4 col-md-6 item">
                                      <!-- single product start-->
                                      <div class="single-product">
                                          <div class="product-img">
                                              <div class="product-label red">
                                                  <div class="new">New</div>
                                              </div>
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/01.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/02.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text">
                                              <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Quisque
                                                      fringilla</a> </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-price">
                                                      <div class="new-price"> $220 </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-4 col-md-6 item">
                                      <!-- single product start-->
                                      <div class="single-product">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/03.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/04.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text">
                                              <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Quisque
                                                      fringilla</a> </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-price">
                                                      <div class="new-price"> $220 </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                              </div>
                          </div>
                          <!--shop grid are end-->

                          <!--shop product list start-->
                          <div role="tabpanel" class="tab-pane fade" id="list">
                              <div class="total-shop-product-list row">
                                  <div class="col-lg-12 item">
                                      <!-- single product start-->
                                      <div class="single-product single-product-list">
                                          <div class="product-img">
                                              <div class="product-label red">
                                                  <div class="new">Sale</div>
                                              </div>
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/02.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/03.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text prodcut-text-list fix">
                                              <div class="prodcut-name list-name montserrat"> <a
                                                      href="<?= route_to('detail_produk') ?>">Magnetic
                                                      Force Bralette</a>
                                              </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-ratting list-ratting">
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                  </div>
                                                  <div class="prodcut-price list-price">
                                                      <div class="new-price"> $220 </div>
                                                      <div class="old-price"> <del>$250</del> </div>
                                                  </div>
                                              </div>
                                              <div class="list-product-content">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                      elit.
                                                      Fusce
                                                      dolor tellus, bibendum eu lacus ids suscipit
                                                      blandit tortor. Aenean eget posuere augue, vel
                                                      molestie
                                                      turpis.
                                                      Ut tempor mauris ut justo luctus aliquam. Nullam
                                                      id quam vitae odio scelerisque ultrices.</p>
                                              </div>
                                              <div class="social-icon-wraper mt-25">
                                                  <div class="social-icon socile-icon-style-1">
                                                      <ul>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-shopping-cart"></i></a>
                                                          </li>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-favorite-outline"></i></a>
                                                          </li>
                                                          <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                  data-toggle="modal" data-target=".modal"
                                                                  tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                          </li>
                                                          <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-12 item">
                                      <!-- single product start-->
                                      <div class="single-product single-product-list">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/03.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/04.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text prodcut-text-list fix">
                                              <div class="prodcut-name list-name montserrat"> <a
                                                      href="<?= route_to('detail_produk') ?>">Magnetic
                                                      Force Bralette</a>
                                              </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-ratting list-ratting">
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                  </div>
                                                  <div class="prodcut-price list-price">
                                                      <div class="new-price"> $220 </div>
                                                  </div>
                                              </div>
                                              <div class="list-product-content">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                      elit.
                                                      Fusce
                                                      dolor tellus, bibendum eu lacus ids suscipit
                                                      blandit tortor. Aenean eget posuere augue, vel
                                                      molestie
                                                      turpis.
                                                      Ut tempor mauris ut justo luctus aliquam. Nullam
                                                      id quam vitae odio scelerisque ultrices.</p>
                                              </div>
                                              <div class="social-icon-wraper mt-25">
                                                  <div class="social-icon socile-icon-style-1">
                                                      <ul>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-shopping-cart"></i></a>
                                                          </li>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-favorite-outline"></i></a>
                                                          </li>
                                                          <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                  data-toggle="modal" data-target=".modal"
                                                                  tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                          </li>
                                                          <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-12 item">
                                      <!-- single product start-->
                                      <div class="single-product single-product-list">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/05.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/06.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text prodcut-text-list fix">
                                              <div class="prodcut-name list-name montserrat"> <a
                                                      href="<?= route_to('detail_produk') ?>">Magnetic
                                                      Force Bralette</a>
                                              </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-ratting list-ratting">
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                  </div>
                                                  <div class="prodcut-price list-price">
                                                      <div class="new-price"> $200 </div>
                                                      <div class="old-price"> <del>$300</del> </div>
                                                  </div>
                                              </div>
                                              <div class="list-product-content">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                      elit.
                                                      Fusce
                                                      dolor tellus, bibendum eu lacus ids suscipit
                                                      blandit tortor. Aenean eget posuere augue, vel
                                                      molestie
                                                      turpis.
                                                      Ut tempor mauris ut justo luctus aliquam. Nullam
                                                      id quam vitae odio scelerisque ultrices.</p>
                                              </div>
                                              <div class="social-icon-wraper mt-25">
                                                  <div class="social-icon socile-icon-style-1">
                                                      <ul>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-shopping-cart"></i></a>
                                                          </li>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-favorite-outline"></i></a>
                                                          </li>
                                                          <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                  data-toggle="modal" data-target=".modal"
                                                                  tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                          </li>
                                                          <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-12 item">
                                      <!-- single product start-->
                                      <div class="single-product single-product-list">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/04.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/05.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text prodcut-text-list fix">
                                              <div class="prodcut-name list-name montserrat"> <a
                                                      href="<?= route_to('detail_produk') ?>">Magnetic
                                                      Force Bralette</a>
                                              </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-ratting list-ratting">
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                  </div>
                                                  <div class="prodcut-price list-price">
                                                      <div class="new-price"> $220 </div>
                                                  </div>
                                              </div>
                                              <div class="list-product-content">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                      elit.
                                                      Fusce
                                                      dolor tellus, bibendum eu lacus ids suscipit
                                                      blandit tortor. Aenean eget posuere augue, vel
                                                      molestie
                                                      turpis.
                                                      Ut tempor mauris ut justo luctus aliquam. Nullam
                                                      id quam vitae odio scelerisque ultrices.</p>
                                              </div>
                                              <div class="social-icon-wraper mt-25">
                                                  <div class="social-icon socile-icon-style-1">
                                                      <ul>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-shopping-cart"></i></a>
                                                          </li>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-favorite-outline"></i></a>
                                                          </li>
                                                          <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                  data-toggle="modal" data-target=".modal"
                                                                  tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                          </li>
                                                          <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                                  <div class="col-lg-12 item">
                                      <!-- single product start-->
                                      <div class="single-product single-product-list">
                                          <div class="product-img">
                                              <div class="single-prodcut-img  product-overlay pos-rltv">
                                                  <a href="<?= route_to('detail_produk') ?>"> <img alt=""
                                                          src="<?= base_url('clothing') ?>/images/product/06.jpg" class="primary-image"> <img
                                                          alt="" src="<?= base_url('clothing') ?>/images/product/07.jpg"
                                                          class="secondary-image">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="product-text prodcut-text-list fix">
                                              <div class="prodcut-name list-name montserrat"> <a
                                                      href="<?= route_to('detail_produk') ?>">Magnetic
                                                      Force Bralette</a>
                                              </div>
                                              <div class="prodcut-ratting-price">
                                                  <div class="prodcut-ratting list-ratting">
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                      <a href="#"><i class="fa fa-star-o"></i></a>
                                                  </div>
                                                  <div class="prodcut-price list-price">
                                                      <div class="new-price"> $200 </div>
                                                      <div class="old-price"> <del>$300</del> </div>
                                                  </div>
                                              </div>
                                              <div class="list-product-content">
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                      elit.
                                                      Fusce
                                                      dolor tellus, bibendum eu lacus ids suscipit
                                                      blandit tortor. Aenean eget posuere augue, vel
                                                      molestie
                                                      turpis.
                                                      Ut tempor mauris ut justo luctus aliquam. Nullam
                                                      id quam vitae odio scelerisque ultrices.</p>
                                              </div>
                                              <div class="social-icon-wraper mt-25">
                                                  <div class="social-icon socile-icon-style-1">
                                                      <ul>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-shopping-cart"></i></a>
                                                          </li>
                                                          <li><a href="#"><i
                                                                      class="zmdi zmdi-favorite-outline"></i></a>
                                                          </li>
                                                          <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                  data-toggle="modal" data-target=".modal"
                                                                  tabindex="0"><i class="zmdi zmdi-eye"></i></a>
                                                          </li>
                                                          <li><a href="#"><i class="zmdi zmdi-repeat"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- single product end-->
                                  </div>
                              </div>
                          </div>
                          <!--shop product list end-->

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
                          <li class="closed"><a href="#">Sports</a></li>
                          <li class="closed"><a href="#">Others</a></li>
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
                          <div class="single-product recent-single-product">
                              <div class="product-img">
                                  <div class="single-prodcut-img  product-overlay pos-rltv">
                                      <a href="<?= route_to('detail_produk') ?>"> <img alt="" src="<?= base_url('clothing') ?>/images/product/rp01.jpg"
                                              class="primary-image">
                                          <img alt="" src="<?= base_url('clothing') ?>/images/product/rp02.jpg" class="secondary-image"> </a>
                                  </div>
                              </div>
                              <div class="product-text">
                                  <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Copenhagen
                                          Spitfire Chair</a> </div>
                                  <div class="prodcut-ratting-price">
                                      <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                              href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star-o"></i></a> </div>
                                      <div class="prodcut-price">
                                          <div class="new-price"> $220 </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- single product end-->

                          <!-- single product start-->
                          <div class="single-product recent-single-product">
                              <div class="product-img">
                                  <div class="single-prodcut-img  product-overlay pos-rltv">
                                      <a href="<?= route_to('detail_produk') ?>"> <img alt="" src="<?= base_url('clothing') ?>/images/product/rp03.jpg"
                                              class="primary-image">
                                          <img alt="" src="<?= base_url('clothing') ?>/images/product/rp04.jpg" class="secondary-image"> </a>
                                  </div>
                              </div>
                              <div class="product-text">
                                  <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Copenhagen
                                          Spitfire Chair</a> </div>
                                  <div class="prodcut-ratting-price">
                                      <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                              href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star-o"></i></a> </div>
                                      <div class="prodcut-price">
                                          <div class="new-price"> $220 </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- single product end-->

                          <!-- single product start-->
                          <div class="single-product recent-single-product">
                              <div class="product-img">
                                  <div class="single-prodcut-img  product-overlay pos-rltv">
                                      <a href="<?= route_to('detail_produk') ?>"> <img alt="" src="<?= base_url('clothing') ?>/images/product/rp02.jpg"
                                              class="primary-image">
                                          <img alt="" src="<?= base_url('clothing') ?>/images/product/rp03.jpg" class="secondary-image"> </a>
                                  </div>
                              </div>
                              <div class="product-text">
                                  <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Copenhagen
                                          Spitfire Chair</a> </div>
                                  <div class="prodcut-ratting-price">
                                      <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                              href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star-o"></i></a> </div>
                                      <div class="prodcut-price">
                                          <div class="new-price"> $220 </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- single product end-->

                          <!-- single product start-->
                          <div class="single-product recent-single-product">
                              <div class="product-img">
                                  <div class="single-prodcut-img  product-overlay pos-rltv">
                                      <a href="<?= route_to('detail_produk') ?>"> <img alt="" src="<?= base_url('clothing') ?>/images/product/rp04.jpg"
                                              class="primary-image">
                                          <img alt="" src="<?= base_url('clothing') ?>/images/product/rp01.jpg" class="secondary-image"> </a>
                                  </div>
                              </div>
                              <div class="product-text">
                                  <div class="prodcut-name"> <a href="<?= route_to('detail_produk') ?>">Copenhagen
                                          Spitfire Chair</a> </div>
                                  <div class="prodcut-ratting-price">
                                      <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                              href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star"></i></a> <a href="#"><i
                                                  class="fa fa-star-o"></i></a> </div>
                                      <div class="prodcut-price">
                                          <div class="new-price"> $220 </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
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