<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Jadwal/formjadwallainnya');  ?>">
                <i class="now-ui-icons education_paper"></i>
                TAMBAH JADWAL
                </a>
                <h3 class="title" style="margin-left : 10px; ">JADWAL KEGIATAN TAMBAHAN</h3>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
                        <table class="table" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $lainnya= $this->Jadwal_m->selectDataJadwallainnya();
                                $no = 1;
                                foreach ($lainnya as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $this->Etc->tgl($row->tanggal); ?></td>
                                        <td><?php echo $row->kegiatan; ?></td>
                                        <td><?php echo character_limiter($row->keterangan,30); ?></td>
                                        <td>
                                        <a class="btn btn-outline-success" href="<?php echo site_url('Jadwal/editlainnyaform/' . $row->id); ?>"> EDIT </a>
                                        <a class="btn btn-outline-danger" href="<?php echo site_url('Jadwal/deleteLainnya/'.$row->id); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>   
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
      </div>


<?php $this->load->view('footer'); ?>