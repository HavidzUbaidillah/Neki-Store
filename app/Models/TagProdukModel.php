<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProdukModel extends Model
{
    use HasFactory;
    protected $table = 'tag_produk';
    protected $primaryKey = 'id_tag_produk';
    protected $guarded = ['id_tag_produk'];

    public final function produk(){
        $this->hasMany(ProdukModel::class,'produk_id','id_tag_produk');
    }
    public final function tag(){
        $this->hasMany(TagModel::class,'tag_id','id_tag_produk');
    }
    public final function getData(){
        return $this->with('produk','tag')->get();
    }
}
