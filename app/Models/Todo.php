<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =[
        'title',
        'body',
        'category_id',
        'image'
    ];
    public function category()
    {
       return $this->belongsTo(Category::class,);
    }
}
