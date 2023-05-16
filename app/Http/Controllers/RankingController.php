<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ranking;

class RankingController extends Controller
{
    protected $rankingModel;

    public function __construct() {
        $this->rankingModel = new Ranking;
    }

    public function index () {
        $activePage = "ranking";
        $musicRankings = $this->rankingModel->getAllMusicRanking();
        return view('ranking', compact('activePage', 'musicRankings'));
    }
}
