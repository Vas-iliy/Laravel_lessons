<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
