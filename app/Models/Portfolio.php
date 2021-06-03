<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Portfolio extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'portfolio';

    protected $fillable = ['company_name', 'description', 'image', 'site_url', 'used_technology', 'category_id'];


    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}