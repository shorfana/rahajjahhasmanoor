<?php if($this->session->flashdata('message')) {
      $flashMessage=$this->session->flashdata('message');
    echo "<script>alert('$flashMessage')</script>";
    } ?>
     <section id="basic-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4 class="card-title">Data guru</h4>
      		    		<a href="<?= site_url($module.'/guru/create') ?>"><button type="button" class="btn btn-primary round waves-effect waves-light">
      	               	 Tambah Data
      	              	</button>
                      </a>
                     </div>
                     <div class="card-content">

                         <div class="card-body card-dashboard">
                             <div class="table-responsive">
                                 <table class="table crudtable">
                                     <thead>
                                       <tr>
                                           <?php foreach ($datafield as $d): ?>
                                             <th><?php echo str_replace("_"," ",$d) ?></th>
                                           <?php endforeach; ?>
                                           <th>aksi</th>
                                       </tr>
                                     </thead>
                                     <tbody></tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <div id="responsive-modal" class="modal fade" tabindex="-1" guru="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
