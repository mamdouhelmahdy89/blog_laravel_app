<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Tag;


class Post extends Model
{
    use HasFactory;

    use SoftDeletes;


    protected $fillable = [
        'title',
        'user_id',
        'content',
        'photo',
         'slug'
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function tag()
    {
        return $this->belongsToMany(Tag::class,);
    }


}
