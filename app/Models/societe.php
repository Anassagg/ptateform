<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class societe extends Model
{
    use HasFactory;
    public function user_societe() {
        return $this->hasMany(user_societe::class, 'societe_id');
    }
    
}
