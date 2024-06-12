<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnhology extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public static function generateSlug($name){

        $slug = Str::slug($name, '-');
        $count = 1;
        //itera nel campo slug per verificare se ne esiste uno uguale, se esiste modifica iln titolo... 
        while(Technology::where('slug', $slug)->first()){
            $slug = Str::of($name)->slug('-') . " - {$count}";
            $count++;
        }
        return $slug;
    }
}
