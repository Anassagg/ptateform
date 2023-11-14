<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_societe extends Model
{
    use HasFactory;
    public function pro_user() {
        return $this->belongsTo(pro_user::class, 'pro_user_id');
    }
    
    public function societe() {
        return $this->belongsTo(societe::class, 'societe_id');
    }
    
}
