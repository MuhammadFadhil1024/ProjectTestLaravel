<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email', 'nama','komentar'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function article(){
        return $this->belongsTo(User::class);
    }
}
