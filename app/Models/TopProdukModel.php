<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TopProdukModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_top_produk';
    protected $table = 'top_produk';
    protected $guarded = ['id_top_produk'];

    public final function produk(): BelongsTo
    {
        return $this->belongsTo(ProdukModel::class,'produk_id','id_produk');
    }
}
