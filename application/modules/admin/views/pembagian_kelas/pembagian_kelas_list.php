<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
     <section id="basic-datatable">
         <div class="row">
             <div class="col-6">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data siswa</h4>
                     </div>
                     <div class="" style="margin-top: 5px; margin-left: 52%;">
                       <a href="<?= site_url($module.'/pembagian_kelas/bagi') ?>"><button type="button" class="btn btn-primary round waves-effect waves-light">
                             Mulai Pembagian Siswa
                            </button>
                       </a>
                     </div>

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                           <th>No</th>
                                           <th>Nomer Induk</th>
                                           <th>Nama Siswa</th>
                                           <th>Umur</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <?php $no = 1;foreach ($data_siswa as $d): ?>
                                         <?php
                                          $umur = date('Y', strtotime($d->tahun_masuk)) - date('Y', strtotime($d->tanggal_lahir));
                                          ?>
                                        <tr>
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $d->no_induk ?></td>
                                          <td><?php echo $d->nama_siswa ?></td>
                                          <td><?php echo $umur ?></td>
                                        </tr>
                                        <?php $no++ ?>
                                       <?php endforeach; ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <div id="responsive-modal" class="modal fade" tabindex="-1" siswa="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                  <p id="modalMsg"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                    <a id="modalHref" href="#">
                    <button type="button" class="btn btn-danger waves-effect waves-light">Ya!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
