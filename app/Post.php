<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //изменение свойств таблиц
    /*protected $table = '';
    protected $primaryKey = 'post_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;*/

    //laravel сам записывает
    /*protected $attributes = [
      'content' => 'Lorem ipsu,'
    ];*/

    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }

    public function getTitleAttribute($value)
    {
        return Str::upper($value);
    }
}
