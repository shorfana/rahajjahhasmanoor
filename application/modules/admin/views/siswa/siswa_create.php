<section class="card">
      <div class="card-header">
        <h4 class="card-title">Tambah Data</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Siswa</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_siswa" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">No Induk</label>
                <div class="col-sm-10">
                  <input type="text" name="no_induk" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">nama_siswa</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_siswa" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">Please Select</option>
                    <option value="L">Laki -laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tempat_lahir" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" name="tanggal_lahir" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Tahun Masuk</label>
                <div class="col-sm-10">
                  <input type="date" value="<?php echo date("Y-m-d"); ?>" name="tahun_masuk" class="form-control" readonly>
                </div>
              </div>
						<!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tingkat</label>
                <div class="col-sm-10">
                  <select class="form-control" name="tingkat" id="tingkat">
                    <option value="">Please Select</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
                </div>
              </div> -->
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Status Tempat Tinggal</label>
                <div class="col-sm-10">
                  <input type="text" name="status_tempat_tinggal" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Warga Negara</label>
                <div class="col-sm-10">
                  <input type="text" name="warga_negara" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                  <input type="text" name="agama" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ayah" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ibu" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ayah" class="form-control">
                </div>
              </div>
						<div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ibu" class="form-control">
                </div>
              </div>
						<!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status Siswa</label>
                <div class="col-sm-10">
                  <input type="text" name="status_siswa" class="form-control">
                </div>
              </div> -->
</div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
      </form>
      </div>
    </section>
