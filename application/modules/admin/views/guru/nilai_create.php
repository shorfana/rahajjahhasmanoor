<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">id_siswa</label>
                <div class="col-sm-10">
                  <input type="text" name="id_siswa" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">fisik_motorik</label>
                <div class="col-sm-10">
                  <input type="text" name="fisik_motorik" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">nilai_agama_moral</label>
                <div class="col-sm-10">
                  <input type="text" name="nilai_agama_moral" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">kognitif</label>
                <div class="col-sm-10">
                  <input type="text" name="kognitif" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">bahasa</label>
                <div class="col-sm-10">
                  <input type="text" name="bahasa" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">pend_agama_islam</label>
                <div class="col-sm-10">
                  <input type="text" name="pend_agama_islam" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">seni</label>
                <div class="col-sm-10">
                  <input type="text" name="seni" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">semester</label>
                <div class="col-sm-10">
                  <input type="text" name="semester" class="form-control">
                </div>
              </div>
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>