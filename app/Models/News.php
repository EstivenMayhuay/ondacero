<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "j_gallery_noticias";

    public function newsByLimit($limit = 10, $destacado = false) {
        $news = DB::table('j_gallery_noticias')
        ->select('j_gallery_noticias.*', 'j_gallery_images.*', 'j_gallery_noticias_categorias.nombre AS catName')
        ->join('j_gallery_images', 'j_gallery_noticias.idPhoto', '=', 'j_gallery_images.idPhoto')
        ->join('j_gallery_noticias_categorias', 'j_gallery_noticias_categorias.idCat', '=', 'j_gallery_noticias.idCat')
        ->where('j_gallery_noticias.destacado', $destacado)
        ->orderBy('entry', 'desc')
        ->take($limit)
        ->get();

        return $news;
    }

    public function newsPaginate ($count = 10) {
        $news = DB::table('j_gallery_noticias')
        ->select('j_gallery_noticias.*', 'j_gallery_images.*', 'j_gallery_noticias_categorias.nombre AS catName')
        ->join('j_gallery_images', 'j_gallery_noticias.idPhoto', '=', 'j_gallery_images.idPhoto')
        ->join('j_gallery_noticias_categorias', 'j_gallery_noticias_categorias.idCat', '=', 'j_gallery_noticias.idCat')
        ->orderBy('entry', 'desc')
        ->paginate($count);

        return $news;
    }


    public function newsPaginateByCategory ($count = 10, $category_alias = "") {
        $news = DB::table('j_gallery_noticias')
        ->select('j_gallery_noticias.*', 'j_gallery_images.*', 'j_gallery_noticias_categorias.nombre AS catName')
        ->join('j_gallery_images', 'j_gallery_noticias.idPhoto', '=', 'j_gallery_images.idPhoto')
        ->join('j_gallery_noticias_categorias', 'j_gallery_noticias_categorias.idCat', '=', 'j_gallery_noticias.idCat')
        ->where('j_gallery_noticias_categorias.alias', $category_alias)
        ->orderBy('entry', 'desc')
        ->paginate($count);

        return $news;
    }

    public function getNewsYear () {
        return DB::table('j_gallery_noticias')
        ->select(DB::raw('distinct year (fecCreado) as year'))
        ->orderBy('year', 'desc')
        ->get();
    }
}
