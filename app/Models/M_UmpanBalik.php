<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_UmpanBalik extends Model
{
    public function aduan()
    {
        return $this->belongsTo(Aduan::class, 'id_aduan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
