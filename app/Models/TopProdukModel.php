<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\QueryException;

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

    public final function getTopProduk(): Collection|array
    {
        return $this->with('produk')->get();
    }

    public final function createTopProduk(array $input){
        try {
            $this->create([

            ]);
            return true;
        }catch (QueryException $e){
            return false;
        }
    }
}
