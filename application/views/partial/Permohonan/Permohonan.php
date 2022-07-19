<div class="content-wrapper">
    <div class="row">
        <?php if ($this->session->flashdata('msg_alert')) { ?>
            <div class="alert alert-info">
                <label style="font-size: 13px;"><?= $this->session->flashdata('msg_alert'); ?></label>
            </div>
        <?php } ?>
        <?php echo form_open_multipart('Inbox/fungsiTambah'); ?>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">NIPP</label>
                    <input type="text" name="nip" class="form-control" id="nip" placeholder="nip">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputJabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputJabatan">Unit Kerja</label>
                    <input type="text" name="unit_kerja" class="form-control" id="unit_kerja" placeholder="Unit kerja">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Tulis keterangan..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?= form_close(); ?>
    </div>
</div>