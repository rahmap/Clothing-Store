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
                                        <a class="active" href="#view11" class="shadow-box" aria-controls="view11" data-toggle="tab"><img src="<?= base_url('clothing') ?>/images/product/01.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view22" class="shadow-box" aria-controls="view22" data-toggle="tab"><img src="<?= base_url('clothing') ?>/images/product/02.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view33" class="shadow-box" aria-controls="view33" data-toggle="tab"><img src="<?= base_url('clothing') ?>/images/product/03.jpg" alt="" /></a></li>
                                       <li>
                                        <a href="#view44" class="shadow-box" aria-controls="view44" data-toggle="tab"><img src="<?= base_url('clothing') ?>/images/product/04.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                           <div class="social-tag">
                              <a href="#"><i class="zmdi zmdi-share"></i></a>
                           </div>
                            <div role="tabpanel" class="tab-pane active" id="view11">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('clothing') ?>/images/product/01.jpg"><img src="<?= base_url('clothing') ?>/images/product/01.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view22">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('clothing') ?>/images/product/02.jpg"><img src="<?= base_url('clothing') ?>/images/product/02.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view33">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('clothing') ?>/images/product/03.jpg"><img src="<?= base_url('clothing') ?>/images/product/03.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="view44">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="<?= base_url('clothing') ?>/images/product/04.jpg"><img src="<?= base_url('clothing') ?>/images/product/04.jpg" alt="Single portfolio" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="single-product-description">
                           <div class="sp-top-des">
                                <h3>GLOB t-SHIRT <span>(Brand)</span></h3>
                                <div class="prodcut-ratting-price">
                                    <div class="prodcut-price">
                                        <div class="new-price"> $220 </div>
                                        <div class="old-price"> <del>$250</del> </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sp-des">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                            </div>
                            <div class="sp-bottom-des">
                            <div class="social-icon socile-icon-style-1 text-center">
                                <ul>
                                    <li style="width:100%;"><a href="#" data-tooltip="Pesan Sekarang" class="add-cart add-cart-text" data-placement="middle" tabindex="0">Pesan Sekarang</a></li>
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
        <div class="descripton-area">
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
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                        <div class="review-wraper">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                <br> veniam, quis nostrud exercitation.</p>
                                            <h5>ABOUT ME</h5>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                            <h5>SIZE & FIT</h5>
                                            <ul>
                                                <li>Model wears: Style Photoliya U2980</li>
                                                <li>Model's height: 185”66</li>
                                            </ul>
                                            <h5>Overview</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
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
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">New</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt="" src="<?= base_url('clothing') ?>/images/product/01.jpg"
                                                    class="primary-image"> <img alt="" src="<?= base_url('clothing') ?>/images/product/02.jpg"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt="" src="<?= base_url('clothing') ?>/images/product/03.jpg"
                                                    class="primary-image"> <img alt="" src="<?= base_url('clothing') ?>/images/product/04.jpg"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">Sale</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt="" src="<?= base_url('clothing') ?>/images/product/02.jpg"
                                                    class="primary-image"> <img alt="" src="<?= base_url('clothing') ?>/images/product/03.jpg"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt="" src="<?= base_url('clothing') ?>/images/product/04.jpg"
                                                    class="primary-image"> <img alt="" src="<?= base_url('clothing') ?>/images/product/03.jpg"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            <div class="col-lg-3">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt="" src="<?= base_url('clothing') ?>/images/product/05.jpg"
                                                    class="primary-image"> <img alt="" src="<?= base_url('clothing') ?>/images/product/06.jpg"
                                                    class="secondary-image"> </a>
                                        </div>

                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                                <div class="old-price"> <del>$250</del> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
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