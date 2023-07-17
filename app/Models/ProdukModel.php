<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use function Symfony\Component\Translation\t;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_poduk';
    protected $guarded = ['id_produk'];

    public final function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class,'kategori_id','id_kategori');
    }

    public final function topProduk(): HasOne
    {
        return $this->hasOne(TopProdukModel::class,'produk_id','id_produk');
    }

    public final function tag(): BelongsToMany
    {
        return $this->belongsToMany(TagModel::class,'tag_produk','produk_id');
    }
}
