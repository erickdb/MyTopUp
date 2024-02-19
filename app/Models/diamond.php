<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diamond extends Model
{
    use HasFactory;

    protected $table = 'diamond';

    protected $fillable = [
        'id_game',
        'jumlah_diamond',
        'harga_diamond',
    ];
    public $timestamps = false;

    public function getGame() {
        return $this->belongsTo(game::class,'id_game', 'id');
    }
}
