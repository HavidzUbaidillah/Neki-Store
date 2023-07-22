<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model implements Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['username','password'];
    protected $guarded = ['id_admin'];


    public function getAuthIdentifierName()
    {
        return 'id_admin';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
