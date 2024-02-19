<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayaran";

    protected $fillable = [
        'id_pesanan',
        'status',
        'tanggal_pembayaran'
    ];

    public $timestamps = true;

    public function getPesanan() {
        return $this->belongsTo(pesanan::class,'id_pesanan', 'id');
    }
}
