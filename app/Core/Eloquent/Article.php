<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table='articles';

    public function resources(){
        return $this->hasMany(Resource::class,'article_id','id');
    }


}
