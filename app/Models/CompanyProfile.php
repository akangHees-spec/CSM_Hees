<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 
        'banner', 
        'title', 
        'tagline', 
        'description', 
        'count', 
        'icon_title', 
        'icon_subtitle', 
        'order'
    ];
}
