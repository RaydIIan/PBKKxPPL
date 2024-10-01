<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    protected $fillable = ['Nama', 'Umur', 'Status', 'Tanggal_Lahir', 'Apakah_Subscribed'];
}
