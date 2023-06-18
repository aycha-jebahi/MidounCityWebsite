<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function Partenaires()
    {
        return $this->belongsTo('App\Partenaire','partenaire_id');

    }
    protected $fillable = ['titre','lieu ','image','description','partenaire_id'];

    public function likes()
    {
        return $this-> hasMany('App\Like');
    }

    public function isLikedByLoggedInUser()
    {
        return $this->likes->where ('partenaire_id', auth()->user()->id )-> isEmpty() ? false : true;
    }


}
