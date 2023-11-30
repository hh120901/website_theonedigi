<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    const ABOUT_CATEGORY = 'about-us';
    const PRODUCTS_CATEGORY = 'our-products';
    const BLOGS_CATEGORY = 'blogs';
    const TEAMS_CATEGORY = 'our-teams';
    const CAREER_CATEGORY = 'career';
    use HasFactory;
    protected $table = 'post_category';
    protected $guarded = [];
}
