<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];
    protected $guarded = ['id_kategori'];

}
