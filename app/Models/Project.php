<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Technology;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['name','slug'];
    public static function generateSlug($name)
    {
        $slug = Str::slug($name, '-');

        return $slug;
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}

