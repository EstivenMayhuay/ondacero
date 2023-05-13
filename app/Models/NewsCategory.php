<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = "j_gallery_noticias_categorias";

    public function allCategories() {
        return NewsCategory::where('estado', 1)->get();
    }

    public function existsCategory ($category_alias = "") {
        return NewsCategory::where('alias', $category_alias)->exists();
    }
}
