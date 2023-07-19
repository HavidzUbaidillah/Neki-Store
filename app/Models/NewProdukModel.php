<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\QueryException;

class NewProdukModel extends Model
{
    use HasFactory;
    protected $table = 'new_produk';
    protected $primaryKey = 'id_new_produk';
    protected $guarded = ['id_new_produk'];

    public final function produk(): HasOne
    {
        return $this->hasOne(ProdukModel::class,'produk_id','id_new_produk');
    }

    public final function createNewProduk(array $input){
        try {
            $this->create([

            ]);
            return true;
        }catch (QueryException $e){
            return false;
        }
    }
}
