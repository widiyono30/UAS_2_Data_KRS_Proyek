<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Krs_model extends Model
{
    protected $table = 'krs';
     
    public function getKrs($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_krs' => $id]);
        }   
    }


    public function getKrsjoin()
    {
         return $this->db->table('krs')
         ->join('data_semester','data_semester.id_semester=krs.semester')
         ->get()->getResultArray();  
    }

    public function dataSemester(){
        return $this->db->table('data_semester')->get()->getResultArray(); // Tampilkan semua data yang ada di tabel provinsi
    }

    public function dataSemesterjoin()
    {
         return $this->db->table('data_semester')
         ->join('kode_semester','kode_semester.id_kode=data_semester.id_semester')
         ->get()->getResultArray();  
    }

    public function saveKrs($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editKrs($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_krs', $id);
        return $builder->update($data);
    }


    public function hapusKrs($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_krs' => $id]);
    }
 
}