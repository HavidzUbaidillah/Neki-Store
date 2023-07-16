<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = ['nama_barang','deskripsi_barang','harga_barang','kategori_id'];
    protected $guarded = ['id_barang'];

    public final function getDataBarang(){

    }
}
