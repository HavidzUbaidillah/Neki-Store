<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_poduk';
    protected $guarded = ['id_produk'];

    public final function kategori(){
        return $this->belongsTo(KategoriModel::class,'kategori_id','id_kategori');
    }
    public final function topProduk(): HasOne
    {
        return $this->hasOne(TopProdukModel::class,'produk_id','id_produk');
    }

    public final function newProduk(){
        return $this->hasOne(NewProdukModel::class,'produk_id','id_produk');
    }

    public final function createProduk(array $input){
        try{
            $this->create([
                'nama_produk'=> $input[''],
                'deskripsi_produk' => $input[''],
                'harga_produk' => $input[''],
            ]);
            return true;
        }catch (QueryException $e){
            return false;
        }
    }

}
