<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit guru</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id_nilai</label>
              <div class="col-sm-10">
                <input type="text" name="id_nilai" class="form-control" placeholder="" value="<?php echo $dataedit->id_nilai?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">id_siswa</label>
              <div class="col-sm-10">
                <input type="text" name="id_siswa" class="form-control" value="<?php echo $dataedit->id_siswa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">fisik_motorik</label>
              <div class="col-sm-10">
                <input type="text" name="fisik_motorik" class="form-control" value="<?php echo $dataedit->fisik_motorik?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">nilai_agama_moral</label>
              <div class="col-sm-10">
                <input type="text" name="nilai_agama_moral" class="form-control" value="<?php echo $dataedit->nilai_agama_moral?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">kognitif</label>
              <div class="col-sm-10">
                <input type="text" name="kognitif" class="form-control" value="<?php echo $dataedit->kognitif?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">bahasa</label>
              <div class="col-sm-10">
                <input type="text" name="bahasa" class="form-control" value="<?php echo $dataedit->bahasa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">pend_agama_islam</label>
              <div class="col-sm-10">
                <input type="text" name="pend_agama_islam" class="form-control" value="<?php echo $dataedit->pend_agama_islam?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">seni</label>
              <div class="col-sm-10">
                <input type="text" name="seni" class="form-control" value="<?php echo $dataedit->seni?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">semester</label>
              <div class="col-sm-10">
                <input type="text" name="semester" class="form-control" value="<?php echo $dataedit->semester?>">
              </div>
              </div>

        </div>
        <input type="hidden" id="deleteFiles" name="deleteFiles">
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
