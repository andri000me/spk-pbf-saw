<div class="row">
    <div class="col-sm-12">
        <h4 class="header-title m-t-0 m-b-20"><?=$title;?></h4>
    </div>
</div> <!-- end row -->

<div class="body">
    <form id="form_validation" method="POST" action="<?=base_url()?>barang/simpan_satuan_sedia">
        <div class="col-sm-4">
            <label for="">Nama Satuan</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="namasatuan" required/>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <label for="">Keterangan</label>
            <div class="form-group">
                <div class="form-line">
                    <input type="text" class="form-control" name="keterangan" required/>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary waves-effect">
        </div>
    </form> <!-- penutup form-->
</div>