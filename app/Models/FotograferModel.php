<?php

namespace App\Models;

use CodeIgniter\Model;

class FotograferModel extends Model
{
    protected $table      = 'fotografer';
    protected $primaryKey = 'id_fotografer';

    public function getFotografer($slug = false)
    {

        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
