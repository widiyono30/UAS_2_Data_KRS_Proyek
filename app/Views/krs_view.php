<div class="container pt-5">
    <a href="<?= base_url('krs/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <a href="<?= base_url('krs/view_pdf');?>" target="_blank" class="btn btn-warning mb-2">Cetak PDF</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data KRS Mahasiswa</h4>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <!-- <th>ID </th> -->
                            <th>NIM </th>
                            <th>Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Semester</th>
                            <th>Mata Kuliah</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getKrs as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <!-- <td><?= $isi['id_krs'];?></td> -->
                                <td><?= $isi['nim'];?></td>
                                <td style="text-align: left;"><?= $isi['mahasiswa'];?></td>
                                <td><?= $isi['program_studi'];?></td>
                                <td><?= $isi['semester'];?></td>
                                <td><?= $isi['mata_kuliah'];?></td>
                                <td>
                                    <a href="<?= base_url('krs/lihat/'.$isi['id_krs']);?>" 
                                    class="btn btn-primary btn-sm">
                                    Lihat</a>
                                    <a href="<?= base_url('krs/edit/'.$isi['id_krs']);?>" 
                                    class="btn btn-success btn-sm">
                                    Edit</a>
                                    <a href="<?= base_url('krs/hapus/'.$isi['id_krs']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data KRS ini ?')"
                                    class="btn btn-danger btn-sm">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
    <a class="btn btn-danger mb-2" href="<?= base_url('login/logout'); ?>" role="button">Logout</a>
</div>