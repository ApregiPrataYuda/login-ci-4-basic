<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><span class="badge badge-secondary"> <?= $title ?> </span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-info" href="#"><span class="badge badge-secondary"> Dashboard</span></a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!--start view for user -->
<section class="content">
<div id="flash" data-flash="<?= session()->getFlashdata('mesages')?>">
        <!-- Default box -->
        <div class="card">
          <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title text-light">Data <?= $title ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            
          <?php
            echo '<p>tes ambil session di ci4</p>';
            echo 'Name :'. session()->get('Name');
            echo '<br>';
            echo 'UserName :'. session()->get('UserName');
            echo '<br>';
            echo 'Email :'. session()->get('UserEmail');

            
            ?>
  
        </div>
        <!-- /.card -->
  </section>
<!--start view for end -->


<?= $this->endSection() ?>