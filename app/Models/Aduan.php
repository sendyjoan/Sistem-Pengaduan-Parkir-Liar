<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aduan extends Model
{
    use HasFactory;
    protected $table = 'aduans';
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
