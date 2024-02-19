<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanan";

    protected $fillable = [
        'id_diamond',
        'id_user',
        'status',
        'tanggal_pesanan'
    ];

    public $timestamps = true;

    public function getDiamond() {
        return $this->belongsTo(diamond::class,'id_diamond', 'id');
    }
    public function getUser() {
        return $this->belongsTo(user::class,'id_user', 'id');
    }
}
