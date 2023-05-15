<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    protected $newsModel, $newsCategory, $newsCategoryModel;

    public function __construct() {
        $this->newsModel = new News;
        $this->newsCategoryModel = new NewsCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $activePage = "noticias";
        $categories = $this->newsCategoryModel->allCategories();
        $years = $this->newsModel->getNewsYear();

        // Filter
        if($request->has('categoria') && $request->has('year')) {
            // $rules = [
            //     'categoria' => 'required',
            //     'year' => 'required'
            // ];

            // $messages = [
            //     'categoria.required' => "El campo categoría es requerido",
            //     'year.required' => "El campo año es requerido"
            // ];

            // $validator = Validator::make($request->all(), $rules, $messages);

            // if($validator->fails()){
            //     return redirect()->back()->withErrors($validator)->withInput();
            $settings = [
                'categoryAlias' =>  $request->categoria,
                'year' => $request->year
            ];

            $news = $this->newsModel->newsPaginateFilter(12, $settings);
            $news->appends(request()->except('page'));
        } else {
            $news = $this->newsModel->newsPaginate();
        }

        return view('news', compact('activePage', 'news', 'categories', 'years'));
    }

    public function newsByCategory ($category_alias, Request $request)
    {
        try {
            if($request->has('categoria') && $request->has('year')) return redirect("/noticias?categoria={$request->categoria}&year={$request->year}");

            $category_exist = $this->newsCategoryModel->existsCategory($category_alias);

            if(!$category_exist) return redirect('/noticias');

            $activePage = "noticias";
            $settings = [
                'categoryAlias' => $category_alias
            ];
            $news = $this->newsModel->newsPaginateFilter(12, $settings);
            $categories = $this->newsCategoryModel->allCategories();
            $years = $this->newsModel->getNewsYear();
            return view('news', compact('activePage', 'news', 'categories', 'years'));
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
