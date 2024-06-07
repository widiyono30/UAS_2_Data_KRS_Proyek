<div class="container p-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit KRS : <?= $krs->mahasiswa;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('krs/update');?>">
                <div class="form-group">
                    <label for="">ID KRS</label>
                    <input type="text" value="<?= $krs->id_krs;?>" name="id_krs" required class="form-control" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" value="<?= $krs->nim;?>" name="nim" required class="form-control" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="">Mahasiswa</label>
                    <input type="text" value="<?= $krs->mahasiswa;?>" name="mahasiswa" required class="form-control" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="">Program Studi</label>
                    <input type="text" value="<?= $krs->program_studi;?>" name="program_studi" required class="form-control" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="">Semester</label>
                    <!-- <input type="text" value="<?= $krs->semester;?>" name="semester" required class="form-control"> -->
                    <select class="form-control disable" name="semester" aria-label="Default select example" required disabled readonly>
                    <?php
                        foreach ($dataSemester as $row) {
                            echo '<option value="' . $row['id_semester'] . '"';
                            if ($row['id_semester'] == $krs->semester) {
                                    echo ' selected';
                            }
                            echo '> (' . $row['id_semester'] . '). ['. $row['kode_semester'] .'] ' . $row['nama_semester'] . '</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mata Kuliah</label>
                    <input type="text" value="<?= $krs->mata_kuliah;?>" name="mata_kuliah" required class="form-control" disabled readonly>
                </div>
                <input type="hidden" value="<?= $krs->id_krs;?>" name="id_krs" disabled readonly>
                <!-- <button class="btn btn-success">Edit Data</button> -->
                <!-- <a href="<?= base_url('krs/edit/'.$krs->id_krs);?>" class="btn btn-success"> Edit</a> -->
                <!-- <a href="<?= base_url('krs/hapus/'.$krs->id_krs);?>" 
                    onclick="javascript:return confirm('Apakah ingin menghapus data KRS ini ?')"
                    class="btn btn-danger"> Hapus</a> -->
                <a href="<?= base_url('krs');?>" class="btn btn-secondary ml-2">Kembali</a>
            </form>
        </div>
    </div>
</div>