<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Krs_model;
use App\Libraries\Pdfgenerator;

class Krs extends BaseController
{
    public function index()
    {
        $model = new Krs_model;
        $data['title']     = 'Data KRS';
        // $data['getKrs'] = $model->getKrs();
        $data['getKrs'] = $model->getKrsjoin(); //join data
        echo view('header_view', $data);
        echo view('krs_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $model = new Krs_model;
        $data['title']     = 'Tambah Data Krs';
        $data['getKrs'] = $model->getKrsjoin();
        // $data['dataSemester'] = $model->dataSemester();
        $data['dataSemester'] = $model->dataSemesterjoin();
        echo view('header_view', $data);
        echo view('tambah_krs_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Krs_model;
        $data = array(
            'id_krs' => $this->request->getPost('id_krs'),
            'nim' => $this->request->getPost('nim'),
            'mahasiswa' => $this->request->getPost('mahasiswa'),
            'program_studi'=> $this->request->getPost('program_studi'),
            'semester'  => $this->request->getPost('semester'),
            'mata_kuliah'  => $this->request->getPost('mata_kuliah')
        );
        $model->saveKrs($data);
        echo '<script>
                alert("Sukses Tambah Data KRS");
                window.location="'.base_url('krs').'"
            </script>';

    }

    public function lihat($id)
    {
        $model = new Krs_model;
        // $data['getKrs'] = $model->getKrsjoin();
        // // $data['dataSemester'] = $model->dataSemester();
        $data['dataSemester'] = $model->dataSemesterjoin();
        $getKrs = $model->getKrs($id)->getRow();
        if(isset($getKrs))
        {
            $data['krs'] = $getKrs;
            $data['title']  = 'Edit '.$getKrs->id_krs;

            echo view('header_view', $data);
            echo view('lihat_krs_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID KRS '.$id.' Tidak ditemukan");
                    window.location="'.base_url('krs').'"
                </script>';
        }
    }

    public function edit($id)
    {
        $model = new Krs_model;
        // $data['getKrs'] = $model->getKrsjoin();
        // // $data['dataSemester'] = $model->dataSemester();
        $data['dataSemester'] = $model->dataSemesterjoin();
        $getKrs = $model->getKrs($id)->getRow();
        if(isset($getKrs))
        {
            $data['krs'] = $getKrs;
            $data['title']  = 'Edit '.$getKrs->id_krs;

            echo view('header_view', $data);
            echo view('edit_krs_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID KRS '.$id.' Tidak ditemukan");
                    window.location="'.base_url('krs').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Krs_model;
        $id = $this->request->getPost('id_krs');
        $data = array(
            'id_krs' => $this->request->getPost('id_krs'),
            'nim' => $this->request->getPost('nim'),
            'mahasiswa' => $this->request->getPost('mahasiswa'),
            'program_studi'=> $this->request->getPost('program_studi'),
            'semester'  => $this->request->getPost('semester'),
            'mata_kuliah'  => $this->request->getPost('mata_kuliah')
        );
        $model->editKrs($data,$id);
        echo '<script>
                alert("Sukses Edit Data KRS");
                window.location="'.base_url('krs').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Krs_model;
        $getKrs = $model->getKrs($id)->getRow();
        if(isset($getKrs))
        {
            $model->hapusKrs($id);
            echo '<script>
                    alert("Hapus Data KRS Sukses");
                    window.location="'.base_url('krs').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID KRS '.$id.' Tidak ditemukan");
                    window.location="'.base_url('krs').'"
                </script>';
        }
    }

    public function view_pdf()
    {
        $Pdfgenerator = new Pdfgenerator();

        $model = new Krs_model;
        // $data['title']     = 'Data KRS';
        // $data['getKrs'] = $model->getKrs();
        $data['getKrs'] = $model->getKrsjoin(); //join data

        // title dari pdf
        $data['title_pdf'] = 'Data KRS Mahasiswa';

        // filename dari pdf ketika didownload
        $file_pdf = 'data_krs';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = view('laporanKRS_pdf', $data);

        // run dompdf
        $Pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

}