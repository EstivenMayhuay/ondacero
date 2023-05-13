<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Locutor;

class HomeController extends Controller
{
    protected $newsModel, $newsCategoryModel, $locutorModel;

    public function __construct() {
        $this->newsModel = new News;
        $this->newsCategoryModel = new NewsCategory;
        $this->locutorModel = new Locutor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activePage = "home";
        $news = $this->newsModel->newsByLimit(6, true);
        $sliderNews = $this->newsModel->newsByLimit(10, false);
        $topics = $this->newsCategoryModel->allCategories();
        $locutors = $this->locutorModel->allLocutors();
        return view('home', compact('activePage', 'news', 'topics', 'sliderNews', 'locutors'));
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
