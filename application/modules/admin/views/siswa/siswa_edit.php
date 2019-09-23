<section class="card">
      <div class="card-header">
        <h4 class="card-title">Edit siswa</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">nik_siswa</label>
              <div class="col-sm-10">
                <input type="text" name="nik_siswa" class="form-control" placeholder="" value="<?php echo $dataedit->nik_siswa?>" readonly>
              </div>
            </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">id_ortu</label>
              <div class="col-sm-10">
                <input type="text" name="id_ortu" class="form-control" value="<?php echo $dataedit->id_ortu?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">no_induk</label>
              <div class="col-sm-10">
                <input type="text" name="no_induk" class="form-control" value="<?php echo $dataedit->no_induk?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">nama_siswa</label>
              <div class="col-sm-10">
                <input type="text" name="nama_siswa" class="form-control" value="<?php echo $dataedit->nama_siswa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">jenis_kelamin</label>
              <div class="col-sm-10">
                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $dataedit->jenis_kelamin?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">tempat_lahir</label>
              <div class="col-sm-10">
                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $dataedit->tempat_lahir?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">tanggal_lahir</label>
              <div class="col-sm-10">
                <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $dataedit->tanggal_lahir?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">alamat</label>
              <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" value="<?php echo $dataedit->alamat?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">tahun_masuk</label>
              <div class="col-sm-10">
                <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $dataedit->tahun_masuk?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">tingkat</label>
              <div class="col-sm-10">
                <input type="text" name="tingkat" class="form-control" value="<?php echo $dataedit->tingkat?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">status_tempat_tinggal</label>
              <div class="col-sm-10">
                <input type="text" name="status_tempat_tinggal" class="form-control" value="<?php echo $dataedit->status_tempat_tinggal?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">warga_negara</label>
              <div class="col-sm-10">
                <input type="text" name="warga_negara" class="form-control" value="<?php echo $dataedit->warga_negara?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">agama</label>
              <div class="col-sm-10">
                <input type="text" name="agama" class="form-control" value="<?php echo $dataedit->agama?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">no_kk</label>
              <div class="col-sm-10">
                <input type="text" name="no_kk" class="form-control" value="<?php echo $dataedit->no_kk?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">no_telp</label>
              <div class="col-sm-10">
                <input type="text" name="no_telp" class="form-control" value="<?php echo $dataedit->no_telp?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">foto_siswa</label>
              <div class="col-sm-10">
                <input type="text" name="foto_siswa" class="form-control" value="<?php echo $dataedit->foto_siswa?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">umur</label>
              <div class="col-sm-10">
                <input type="text" name="umur" class="form-control" value="<?php echo $dataedit->umur?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">tinggi_badan</label>
              <div class="col-sm-10">
                <input type="text" name="tinggi_badan" class="form-control" value="<?php echo $dataedit->tinggi_badan?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">berat_badan</label>
              <div class="col-sm-10">
                <input type="text" name="berat_badan" class="form-control" value="<?php echo $dataedit->berat_badan?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">jarak_sekolah</label>
              <div class="col-sm-10">
                <input type="text" name="jarak_sekolah" class="form-control" value="<?php echo $dataedit->jarak_sekolah?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">anak_ke</label>
              <div class="col-sm-10">
                <input type="text" name="anak_ke" class="form-control" value="<?php echo $dataedit->anak_ke?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">jumlah_saudara</label>
              <div class="col-sm-10">
                <input type="text" name="jumlah_saudara" class="form-control" value="<?php echo $dataedit->jumlah_saudara?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">ukuran_seragam</label>
              <div class="col-sm-10">
                <input type="text" name="ukuran_seragam" class="form-control" value="<?php echo $dataedit->ukuran_seragam?>">
              </div>
              </div>
						<div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">riwayat_penyakit</label>
              <div class="col-sm-10">
                <input type="text" name="riwayat_penyakit" class="form-control" value="<?php echo $dataedit->riwayat_penyakit?>">
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
