<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;
    
    protected $table = 'Barang';
    public $timestamps = false;

    protected $primaryKey = 'No_inventaris'; // -> deklarasi primary key untuk Eloquent ORM
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable= [
        'No_inventaris', // -> deklarasi column yg akan diisi oleh mass asignment
        'Nama_barang',
        'Stock_barang',
        'Jenis_barang',
        'Merk_barang'
    ];
    
}
