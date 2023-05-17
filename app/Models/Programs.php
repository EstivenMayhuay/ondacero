<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Programs extends Model
{
    use HasFactory;

    protected $table = "j_gallery_temasdia";

    public function getProgramsByDay ($curr_day) {
        $programs =  DB::table('j_gallery_temasdia')
        ->where('dia', $curr_day)
        ->orderBy('hora', 'ASC')
        ->get();

        foreach ($programs as $program) {
            $program->locutor = trim(explode('-', $program->title)[1]);
            $program->title = trim(explode('-', $program->title)[0]);
        }

        return (object)[
            'day' => getNameByNumberDay($curr_day),
            'results' => $programs
        ];
    }
}
