<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    protected $newsModel, $newsCategory;

    public function __construct() {
        $this->newsModel = new News;
        $this->newsCategoryModel = new NewsCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activePage = "noticias";
        $news = $this->newsModel->newsPaginate(12);
        $categories = $this->newsCategoryModel->allCategories();
        return view('news', compact('activePage', 'news', 'categories'));
    }

    public function newsByCategory ($category_alias)
    {
        try {
        $category_exist = $this->newsCategoryModel->existsCategory($category_alias);

        if(!$category_exist) return redirect('/noticias');

        $activePage = "noticias";
        $news = $this->newsModel->newsPaginateByCategory(10, $category_alias);
        $categories = $this->newsCategoryModel->allCategories();
        return view('news', compact('activePage', 'news', 'categories'));

        } catch (\Throwable $th) {
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
