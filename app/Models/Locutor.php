<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locutor extends Model
{
    use HasFactory;

    protected $table = "locutores";

    public function allLocutors () {
        return Locutor::where('state', 1)->get();
    }
}
