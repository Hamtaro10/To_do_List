<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'user_id',
        'category_id',
        'title',
        'description',
        'start_time',
        'end_time',
        'priority',
        'status'

    ];

    public function userRelationSchedule(){
        return $this -> belongsTo(User::class);
    }

    public function categoryRelationSchedule(){
        return $this -> belongsTo(Category::class);
    }
}
