<?php $this->load->view("admin/_partials/setting_top.php"); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Data</h4>
            <p class="card-category">Complete your Data</p>
          </div>
          <div class="card-body">
            <div class="row">
              <a href="<?= base_url('crud_c_design/list') ?>" class="btn btn-success pull-right">List Data<div class="ripple-container"></div></a>
            </div>
            <?= form_open(base_url('crud_c_design/add'), ' class="form-horizontal"'); ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" name="username_i" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Name</label>
                  <input type="text" name="name_i" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Pass</label>
                  <input type="text" name="pass_i" class="form-control">
                </div>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success pull-right">Tambah Data<div class="ripple-container"></div></button>
            <button type="submit" name="reset" class="btn btn-primary pull-right">Reset<div class="ripple-container"></div></button>
            <div class="clearfix"></div>

            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("admin/_partials/setting_buttom.php"); ?>