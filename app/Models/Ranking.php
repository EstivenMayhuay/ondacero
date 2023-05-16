<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Ranking extends Model
{
    use HasFactory;

    protected $table = "j_gallery_music_rankings";

    public function getAllMusicRanking () {
        $songsArr = DB::table('j_gallery_music_rankings')
        ->orderBy('idRanking', 'desc')
        ->first();
        $musicRankings = [];

        foreach(json_decode($songsArr->songs) as $key => $songId) {
            $song = DB::table('j_gallery_music_rankings_songs')
            ->where('idSong', $songId)
            ->first();

            $song->authorSong = trim(explode('-', $song->titleSong)[1]);
            $song->titleSong = trim(explode('-', $song->titleSong)[0]);
            $song->position = $key + 1;

            array_push($musicRankings, $song);
        }

        return (object)[
            'week' => Carbon::parse($songsArr->semanaRanking)->format('d/m/Y'),
            'results' => $musicRankings
        ];
    }
}
