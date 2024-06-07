<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Krs_model extends Model
{
    protected $table = 'users';
     
    public function getUsers($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['user_id' => $id]);
        }   
    }

    public function saveUsers($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editUsers($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('user_id', $id);
        return $builder->update($data);
    }


    public function hapusUsers($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['user_id' => $id]);
    }
 
}