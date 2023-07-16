<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use function Symfony\Component\Translation\t;

class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];
    protected $guarded = ['id_kategori'];

    public final function produk(): HasMany
    {
        return $this->hasMany(ProdukModel::class,'kategori_id','id_kategori');
    }
}
