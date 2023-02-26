<?php

namespace App\Models;

use App\Models\Risk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Risk extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];
   

    // public $table = "risks";

    protected $fillable = [
        'name',
        'description',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
