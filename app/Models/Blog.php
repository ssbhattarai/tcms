<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function category () {
        return $this->belongsTo(Category::class, 'category_id');
    }


public static function search($query)
{
    if(strlen($query) > 0 ) {

        return Blog::with('category')->where(function($q) use ($query) {
                    $q
                        ->where('title', 'LIKE', '%'. $query . '%')
                        ->orWhere('description', 'LIKE', '%' . $query . '%')
                        ->orWhere('slug', 'LIKE ', '%' . $query . '%');
                });
    } else {
        return Blog::with('category');
    }
}
}
