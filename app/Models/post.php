<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class post extends Model
{
    use HasFactory;
    // use sluggable;

    // protected $fillable artinya yg boleh di isi dalam tabel di model ini
    // protected $fillable = ['title', 'excerpt', 'body'];

    //protected $guarded artinya yg tidak boleh di isi dalam tabel di model ini
    protected $guarded = ['id'];
    protected $with = ['Author', 'category'];


    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        //versi menggunakan callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('Author', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    // cara menghubungkan dengan tabel atau model kategory
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}


//4XwWsCRABuHl6ZFKQpHJ10TYKr1JK95uWn9_se9aEHU -> access key unsplash
//H_Ru2u_oe43wOuJj6rfBhAPuukzrYeWdsTBwtpg-uII -> secret key unsplash
