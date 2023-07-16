<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TagModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tag';
    protected $table = 'tag';
    protected $guarded = ['id_tag'];

    public final function produk(): BelongsToMany
    {
        return $this->belongsToMany(ProdukModel::class,'tag_produk','tag_id');
    }
}
