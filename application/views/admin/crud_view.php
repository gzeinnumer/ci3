<?php $this->load->view("admin/_partials/setting_top.php"); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-danger">
            <h4 class="card-title">Data User</h4>
            <p class="card-category">New user on 15th October, 2021</p>
          </div>
          <div class="card-body table-responsive">
            <a href="<?= base_url('crud_c_design/add') ?>" class="btn btn-success pull-right">Tambah Data<div class="ripple-container"></div></a>
            <table class="table table-hover">
              <thead class="text-danger">
                <th>Id</th>
                <th>username</th>
                <th>name</th>
                <th>pass</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php foreach ($data as $d) { ?>
                  <tr>
                    <td><?php echo $d->id ?></td>
                    <td><?php echo $d->username ?></td>
                    <td><?php echo $d->name ?></td>
                    <td><?php echo $d->pass ?></td>
                    <td>
                      <a href="<?php echo base_url('crud_c_design/edit/' . $d->id) ?>">
                        Edit
                      </a>
                      <a href="<?php echo base_url('crud_c_design/delete/' . $d->id) ?>" onclick="return confirm('Yakin ingin menghapus data?')">
                        Hapus
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("admin/_partials/setting_buttom.php"); ?>