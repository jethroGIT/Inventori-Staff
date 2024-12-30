<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    /** @use HasFactory<\Database\Factories\RuanganFactory> */
    use HasFactory;
    protected $table = 'Ruangan';
    public $timestamps = false;
}
