<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "j_gallery_noticias";

    public function newsByLimit($limit = 12, $destacado = false) {
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

    public function newsPaginate ($count = 12) {
        $news = DB::table('j_gallery_noticias')
        ->select('j_gallery_noticias.*', 'j_gallery_images.*', 'j_gallery_noticias_categorias.nombre AS catName')
        ->join('j_gallery_images', 'j_gallery_noticias.idPhoto', '=', 'j_gallery_images.idPhoto')
        ->join('j_gallery_noticias_categorias', 'j_gallery_noticias_categorias.idCat', '=', 'j_gallery_noticias.idCat')
        ->orderBy('entry', 'desc')
        ->paginate($count)->onEachSide(0);

        return $news;
    }

    /*
        $categoryFilters = [
            'year' => 2023,
            'categoryAlias' => 'musica'
        ]
    */
    public function newsPaginateFilter($count = 12, $categoryFilters) {
        $query = DB::table('j_gallery_noticias');

        if(array_key_exists('year', $categoryFilters)) $query->whereYear('j_gallery_noticias.fecCreado', $categoryFilters['year']);

        if(array_key_exists('categoryAlias', $categoryFilters)) $query->where('j_gallery_noticias_categorias.alias', $categoryFilters['categoryAlias']);

        $query->select('j_gallery_noticias.*', 'j_gallery_images.*', 'j_gallery_noticias_categorias.nombre AS catName');
        $query->join('j_gallery_images', 'j_gallery_noticias.idPhoto', '=', 'j_gallery_images.idPhoto');
        $query->join('j_gallery_noticias_categorias', 'j_gallery_noticias_categorias.idCat', '=', 'j_gallery_noticias.idCat');

        $news = $query->orderBy('entry', 'desc')->paginate($count)->onEachSide(0);

        return $news;
    }

    public function getNewsYear () {
        return DB::table('j_gallery_noticias')
        ->select(DB::raw('distinct year (fecCreado) as year'))
        ->orderBy('year', 'desc')
        ->get();
    }
}
