<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

      /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                //Cuando el titulo se modifique o se ingrese un registro se convertirá en slug
                'source' => 'title',
                'onUpdate' => 'true'
            ]
        ];

       
    }

    //Un post pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}