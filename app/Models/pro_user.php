<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro_user extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $fillable = [
        'username', 
        'remember_token',
    ];
    
    protected $hidden = [
        'remember_token',
    ];
    public function user_societe() {
        return $this->hasMany(user_societe::class, 'pro_user_id');
    }
    
    
}
