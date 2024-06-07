<div class="container p-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data KRS</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('krs/add');?>">
                <div class="form-group">
                    <label for="">ID KRS</label>
                    <input type="text" name="id_krs" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mahasiswa</label>
                    <input type="text" name="mahasiswa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Semester</label>
                    <!-- <input type="text" name="semester" class="form-control" required> -->
                    <select class="form-control" name="semester" aria-label="Default select example" required>
                        <option value="">Pilih Semester</option>
                        <?php
                            foreach($dataSemester as $smt){ // Lakukan looping pada variabel siswa dari controller
                                echo "<option value='".$smt['id_semester']."'>(".$smt['semester']."). [".$smt['kode_semester']."] ".$smt['nama_semester']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mata Kuliah</label>
                    <input type="text" name="mata_kuliah" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Tambah Data</button>
                <a href="<?= base_url('krs');?>" class="btn btn-secondary ml-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>