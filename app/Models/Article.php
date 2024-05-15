<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable =[
        'title',
        'price',
        'body',
        'user_id',
        'category_id',
    ];
    
    public function toSearchableArray()
    {
        $array = $this->toArray();
        
        $array['title'] = $this->title;
        $array['body'] = $this->body;
        $array['category'] = $this->category;

        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
