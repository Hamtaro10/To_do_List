<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'name',
        'description'
    ];

    public function userRelationCategory(){
        return $this -> belongsTo(User::class);
    }

    public function scheduleRelationCategory(){
        return $this-> hasMany(Schedule::class);
    }
    
}
