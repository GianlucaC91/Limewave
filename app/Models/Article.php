<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable =[
        "title",
        "price",
        "body",
        "user_id",
        "category_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function setApproved($el)
    {
        $this->is_accepted = $el;
        $this->save();
        return true;
    }

    public static function reviseNotification(){
        return Article::where("is_accepted", null)->count();
    }

    public function toSearchableArray(){
        $category = $this->category;
        $array = [
             "id" => $this->id,
            "title" => $this->title,
            "category" => $category,
        ];
       return $array;
    }
}
