<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id_foto';
    protected $allowedFields = ['id_fotografer', 'judul', 'ulasan', 'jumlah_rating', 'rataRata_rating', 'file_foto'
        /** , 'user_created_at' */
    ];
}
