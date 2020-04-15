<?= $this->extend('layouts/main_dashboard') ?>

<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('outCSS') ?>

<?= $this->endSection() ?>

<?= $this->section('pageName') ?>
<?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<li class="breadcrumb-item"><a href="#"><?= APP_NAME ?></a></li>
<li class="breadcrumb-item"><a href="javascript: void(0);">Data Produk</a></li>
<li class="breadcrumb-item active">Tambah Produk</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-8">
      <div class="card">
          <div class="card-body">

              <h4 class="header-title"><?= $title ?></h4>
              <p class="card-title-desc">Tambahkan data produk ke <?= APP_NAME ?>.</p>
              <form action="<?= base_url('dashboard/tambah_produk') ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Judul Produk</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('judulProduk'))? 'is-invalid' : '' ; ?>" name="judulProduk" type="text" value="<?= set_value('judulProduk') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('judulProduk'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Brand Produk</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('brandProduk'))? 'is-invalid' : '' ; ?>" name="brandProduk" type="text" value="<?= set_value('brandProduk') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('brandProduk'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Harga Produk</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('hargaProduk'))? 'is-invalid' : '' ; ?>" name="hargaProduk" type="number" value="<?= set_value('hargaProduk') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('hargaProduk'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Diskon Produk</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('diskonProduk'))? 'is-invalid' : '' ; ?>" name="diskonProduk" type="number" value="<?= set_value('diskonProduk') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('diskonProduk'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Keterangan Singkat</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('keteranganTumb'))? 'is-invalid' : '' ; ?>" name="keteranganTumb" type="text" value="<?= set_value('keteranganTumb') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keteranganTumb'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Keterangan Full</label>
                  <div class="col-md-10">
                      <textarea class="form-control <?= (\Config\Services::validation()->getError('keterangan'))? 'is-invalid' : '' ; ?>" name="keterangan" type="text"><?= set_value('keterangan') ?></textarea>
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keterangan'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Foto Depan</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('keterangan'))? 'is-invalid' : '' ; ?>" name="fotoDepan" type="file" required>
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keterangan'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Foto Belakang</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('keterangan'))? 'is-invalid' : '' ; ?>" name="fotoBelakang" type="file" required>
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keterangan'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Related Foto Depan</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('keterangan'))? 'is-invalid' : '' ; ?>" name="fotoRelatedDepan" type="file" required>
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keterangan'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Related Foto Belakang</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('keterangan'))? 'is-invalid' : '' ; ?>" name="fotoRelatedBelakang" type="file" required>
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('keterangan'); ?>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Kategori</label>
                  <div class="col-md-10">
                    <select class="form-control" name="kategori">
                      <option value=""> - Pilih -</option>
                      <option value="TEST">TEST</option>
                    </select>
                  </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <button type="submit" id="btn-add" name="submit"
                        class="btn btn-info btn-lg waves-effect waves-light">Tambah Produk
                    </button>
                  </div>
                </div>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!-- end col -->
</div>
<?= $this->endSection() ?>

<?= $this->section('outJS') ?>

<?= $this->endsection() ?>
