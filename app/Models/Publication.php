<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable=['category_id','title','image','content','published'];
     protected $casts = [
            'published' => 'boolean',
        ];

    public function category(){
            return $this->belongsTo(Category::class);
    }

}
