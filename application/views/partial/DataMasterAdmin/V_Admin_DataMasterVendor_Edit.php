<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?= $title_page; ?></h4>
          <?php if ($this->session->flashdata('msg_alert')) { ?>

            <div class="alert alert-info">
              <label style="font-size: 13px;"><?= $this->session->flashdata('msg_alert'); ?></label>
            </div>
          <?php } ?>
          <?= form_open_multipart('data_master/edit/vendor/' . $data_vendor->id, array('method' => 'post')); ?>
          <input type="hidden" name="id" value="<?= $data_vendor->id; ?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $data_vendor->namalengkap; ?>" name="namalengkap" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type</label>
                <div class="col-sm-9">
                  <select name="type" class="form-control">
                    <option disabled selected>-- Pilih --</option>
                    <option value="vendor" <?= (($data_vendor->type == 'vendor') ? 'selected' : ''); ?>>Vendor</option>
                    <!-- <option value="baak" <?= (($data_vendor->type == 'baak') ? 'selected' : ''); ?>>Ka. BAAK</option> -->
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $data_vendor->username; ?>" name="username" class="form-control" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">NIPP</label>
                <div class="col-sm-9">
                  <input type="text" value="<?= $data_vendor->nip; ?>" name="nip" class="form-control" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" placeholder="*********" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Avatar</label>
                <div class="col-sm-9">
                  <input type="file" name="avatar">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light" type="reset">Reset</button>
              </div>
            </div>
          </div>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>