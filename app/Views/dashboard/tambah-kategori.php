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
<li class="breadcrumb-item"><a href="javascript: void(0);">Data Kategori</a></li>
<li class="breadcrumb-item active">Tambah Kategori</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-8">
      <div class="card">
          <div class="card-body">

              <h4 class="header-title"><?= $title ?></h4>
              <p class="card-title-desc">Tambahkan data Kategori ke <?= APP_NAME ?>.</p>
              <form action="<?= base_url('dashboard/tambah_kategori') ?>" method="POST">
              <?= csrf_field() ?>
              <div class="form-group row">
                  <label for="example-search-input" class="col-md-2 col-form-label">Nama Kategori</label>
                  <div class="col-md-10">
                      <input class="form-control <?= (\Config\Services::validation()->getError('kategori'))? 'is-invalid' : '' ; ?>" name="kategori" type="text" value="<?= set_value('kategori') ?>">
                      <div class="invalid-feedback">
                          <?= \Config\Services::validation()->getError('kategori'); ?>
                      </div>
                  </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <button type="submit" id="btn-add" name="submit"
                        class="btn btn-info btn-lg waves-effect waves-light">Tambah Kategori
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
