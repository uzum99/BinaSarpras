<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_UmpanBalik extends Model
{
    use HasFactory;

    protected $table = 'umpan_balik';

    protected $fillable = [
        'feedback',
    ];

    public function aduan()
    {
        return $this->belongsTo(M_Aduan::class, 'id_aduan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
